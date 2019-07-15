<?php

    session_start();
    require '../../Model/class-conexao.php';

    // resgata variáveis do formulário
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    $url = "../../View/login-pmm-ouvidoria.php";
    
    if (empty($email) || empty($senha))
    {
        $_SESSION['count_erro'] = 1;
        $_SESSION['Compos_vazio'] = "Informe e-mail e a senha";       
        echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
    }else{
        // cria o hash da senha
        $passwordHash = make_hash($senha);

        $database = new conexaoBD();
        $PDO = $database->getConnection();

        $sql = "SELECT id, nome FROM t42_usuarios_ouvidoria WHERE email = :email AND senha = :senha AND tipo = 2";
        $stmt = $PDO->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $passwordHash);

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($users) <= 0)
        {
            $_SESSION['count_erro'] = 1;
            $_SESSION['validar_Compos'] = "E-mail ou senha incorretos";
            echo " <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'> ";
        }else{
            $user = $users[0];

            $_SESSION['OuvidorOuvidoriaLogged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];
            
            header('Location: ../../View/ouvidoria/OuvidorGeral/Dashboard.php');
        }
    }
?>