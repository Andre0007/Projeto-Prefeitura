<?php

class RegAreas {

    private $conn;
    private $table_name = "t24_regularizacao_areas_habitacao";
    public $id;
    public $descricao;
    public $data_inscricao;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    function readAll() {

        $query = "SELECT id, descricao, DATE_FORMAT(data_inscricao,'%d/%m/%Y %H:%m:%s') data_inscricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET numFase=:numFase, descricao=:descricao, data_inscricao=NOW()";

        $stmt = $this->conn->prepare($query);

        $this->numFase = $this->numFase;
        $this->descricao = $this->descricao;

        $stmt->bindParam(":numFase", $this->numFase);
        $stmt->bindParam(":descricao", $this->descricao);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                   print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }
    
    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET numFase = :numFase,
                         descricao = :descricao
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->numFase = htmlspecialchars(strip_tags($this->numFase));
        $this->descricao = $this->descricao;
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':numFase', $this->numFase);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
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

    function readOne() {

        $query = "SELECT id, numFase, descricao
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->numFase = $row['numFase'];
        $this->descricao = $row['descricao'];
    }
    
    function readText() {

        $query = "SELECT numFase, descricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->numFase = $row['numFase'];
        $this->descricaoArea = $row['descricao'];
    }

}

?>