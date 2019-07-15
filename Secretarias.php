<!DOCTYPE html>
<html lang="pt-br">
    
    <?php $pagina = 'Secretarias'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Lista de Secretarios'; include './App_Includes/Header.php'; ?>  
    
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>

       <section id="courseArchive" class="ConteudoSection">
            
            <div class="container">
              <div class="row">
                  
                    <table id="test-table" class="sticky-thead">
                        <thead>
                            <tr>
                                <th>Secretarias</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <a href="#"> Secretaria do Governo </a> </td>       
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Adm"> Secretaria de Administração, Tecnologia e Modernização </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Proc"> Procuradoria Geral do Município </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Fazen"> Secretaria da Fazenda </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Sau"> Secretaria da Saúde </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Edu"> Secretaria da Educação </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Espo"> Secretaria do Esporte, Cultura e Lazer </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=DesenS"> Secretaria de Desenvolvimento Social </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Obras"> Secretaria de Obras e Serviços </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Hab"> Secretaria de Habitação, Regularização Fundiária e Planejamento Urbano </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Meio"> Secretaria do Meio Ambiente </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=DesenE"> Secretaria de Desenvolvimento Econômico e Turismo </a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Seguran"> Secretaria de Segurança Pública, Transporte e Mobilidade Urbana</a> </td>
                            </tr>
                            <tr>
                                <td> <a href="Sobre-Secretario.php?cat=Sub"> Subprefeitura do Distrito de Terra Preta </a> </td>
                            </tr>
                        </tbody>
                    </table>
                  
               </div>
            </div>
            
        </section>

        <?php include './App_Includes/Footer.php'; ?>
    </body>
</html>