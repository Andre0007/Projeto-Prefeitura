<?php

class Governo {

    private $conn;
    private $table_name = "t13_governo";
    public $id;
    public $nome;
    public $descricao;
    public $categoria;
    public $cargo_governo;
    public $imagem_perfil;
    public $telefone_secretaria;
    public $endereco_secretaria;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    function delete() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET nome = :nome,
                         descricao = :descricao,
                         categoria = :categoria,
                         cargo_governo = :cargo_governo,
                         imagem_perfil = :imagem_perfil,                        
                         telefone_secretaria = :telefone_secretaria,
                         endereco_secretaria = :endereco_secretaria
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = $this->descricao;
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));
        $this->cargo_governo = htmlspecialchars(strip_tags($this->cargo_governo));
        $this->imagem_perfil = htmlspecialchars(strip_tags($this->imagem_perfil));                
        $this->telefone_secretaria = htmlspecialchars(strip_tags($this->telefone_secretaria));
        $this->endereco_secretaria = htmlspecialchars(strip_tags($this->endereco_secretaria));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':cargo_governo', $this->cargo_governo);
        $stmt->bindParam(':imagem_perfil', $this->imagem_perfil);                
        $stmt->bindParam(':telefone_secretaria', $this->telefone_secretaria);
        $stmt->bindParam(':endereco_secretaria', $this->endereco_secretaria);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT nome, descricao, categoria, cargo_governo, imagem_perfil, telefone_secretaria, endereco_secretaria  
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->descricao = $row['descricao'];
        $this->categoria = $row['categoria'];
        $this->cargo_governo = $row['cargo_governo'];
        $this->imagem_perfil = $row['imagem_perfil'];        
        $this->telefone_secretaria = $row['telefone_secretaria'];
        $this->endereco_secretaria = $row['endereco_secretaria'];
    }

    function readGov() {

        $query = "SELECT nome, descricao, imagem_perfil, telefone_secretaria, endereco_secretaria  
                    FROM " . $this->table_name . "
                   WHERE categoria = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->categoria);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->descricao = $row['descricao'];
        $this->imagem_perfil = $row['imagem_perfil'];       
        $this->telefone_secretaria = $row['telefone_secretaria'];
        $this->endereco_secretaria = $row['endereco_secretaria'];
    }
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET nome=:nome, 
                      descricao=:descricao, 
                      categoria=:categoria, 
                      cargo_governo=:cargo_governo, 
                      imagem_perfil=:imagem_perfil,
                      telefone_secretaria=:telefone_secretaria,
                      endereco_secretaria=:endereco_secretaria";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = $this->descricao;
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));
        $this->cargo_governo = htmlspecialchars(strip_tags($this->cargo_governo));
        $this->imagem_perfil = htmlspecialchars(strip_tags($this->imagem_perfil));       
        $this->telefone_secretaria = htmlspecialchars(strip_tags($this->telefone_secretaria));
        $this->endereco_secretaria = htmlspecialchars(strip_tags($this->endereco_secretaria));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":categoria", $this->categoria);
        $stmt->bindParam(":cargo_governo", $this->cargo_governo);
        $stmt->bindParam(":imagem_perfil", $this->imagem_perfil);       
        $stmt->bindParam(":telefone_secretaria", $this->telefone_secretaria);
        $stmt->bindParam(":endereco_secretaria", $this->endereco_secretaria);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                   print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }

    function readAll() {

        $query = "SELECT id, nome, cargo_governo
                    FROM " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readSec() {       
        $query = "SELECT id, nome, descricao, imagem_perfil
                    FROM " . $this->table_name . "
                   WHERE categoria = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->categoria);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->nome = $row['nome'];
        $this->descricao = $row['descricao'];
        $this->imagem_perfil = $row['imagem_perfil'];
    }
    
    function updateSec() {
        
        $query = "UPDATE " . $this->table_name . "
                     SET nome = :nome,
                         descricao = :descricao,
                         imagem_perfil = :imagem_perfil
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = $this->descricao;
        $this->imagem_perfil = htmlspecialchars(strip_tags($this->imagem_perfil));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':imagem_perfil', $this->imagem_perfil);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}

?>