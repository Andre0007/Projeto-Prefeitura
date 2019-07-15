<?php

class Telefones {

    private $conn;
    private $table_name = "t14_telefone";
    public $id;
    public $departamento;
    public $telefone;
    
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
                     SET departamento = :departamento,
                         telefone = :telefone
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->departamento = htmlspecialchars(strip_tags($this->departamento));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':departamento', $this->departamento);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT departamento, telefone 
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->departamento = $row['departamento'];
        $this->telefone = $row['telefone'];
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET departamento=:departamento, telefone=:telefone";

        $stmt = $this->conn->prepare($query);

        $this->departamento = htmlspecialchars(strip_tags($this->departamento));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));

        $stmt->bindParam(":departamento", $this->departamento);
        $stmt->bindParam(":telefone", $this->telefone);

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

        $query = "SELECT id, departamento, telefone
                    FROM " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>