<?php

class Categoria {

    private $conn;
    private $table_name = "t10_categoria_licitacao";
    public $id_categoria;
    public $descricao;

    public function __construct($db) {
        $this->conn = $db;
    }

    function delete() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id_categoria = ?";
        $stmt = $this->conn->prepare($query);
        $this->id_categoria = htmlspecialchars(strip_tags($this->id_categoria));
        $stmt->bindParam(1, $this->id_categoria);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET descricao = :descricao
                   WHERE id_categoria = :id_categoria";

        $stmt = $this->conn->prepare($query);

        $this->descricao = htmlspecialchars(strip_tags($this->descricao));
        $this->id_categoria = htmlspecialchars(strip_tags($this->id_categoria));

        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id_categoria', $this->id_categoria);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT descricao  
                    FROM " . $this->table_name . "
                   WHERE id_categoria = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_categoria);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->descricao = $row['descricao'];
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET descricao=:descricao";

        $stmt = $this->conn->prepare($query);
        $this->descricao = htmlspecialchars(strip_tags($this->descricao));
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

    function readAll() {

        $query = "SELECT id_categoria, descricao
                    FROM " . $this->table_name . "
                ORDER BY id_categoria DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>
