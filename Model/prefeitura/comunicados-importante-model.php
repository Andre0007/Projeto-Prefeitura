<?php

class ComunicadoImportante {

    private $conn;
    private $table_name = "t07_comunicado_importante";
    public $id;
    public $titulo;
    public $descricao;
    public $data_postagem;

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
                     SET titulo = :titulo,
                         descricao = :descricao                       
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->descricao = $this->descricao;
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET titulo=:titulo,
                      descricao=:descricao, 
                      data_postagem=:data_postagem";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->descricao = $this->descricao;

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":data_postagem", $this->data_postagem);

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

        $query = "SELECT id, 
                         titulo,
                         DATE_FORMAT(data_postagem,'%d/%m/%Y %H:%m:%s ') data_postagem
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readOne() {

        $query = "SELECT titulo,  
                         descricao
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        $this->titulo = $row['titulo'];
        $this->descricao = $row['descricao'];
    }     
    
    function readFourComunicados() {

        $query = "SELECT descricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>