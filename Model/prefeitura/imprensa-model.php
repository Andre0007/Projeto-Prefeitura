<?php

class Imprensa {

    private $conn;
    private $table_name = "t02_imprensa";
    public $id;
    public $numero;
    public $url;
    public $data_lancamento;
    
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
                     SET numero = :numero,
                         url = :url,
                         data_lancamento = :data_lancamento
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->numero = htmlspecialchars(strip_tags($this->numero));
        $this->url = htmlspecialchars(strip_tags($this->url));
        $this->data_lancamento = htmlspecialchars(strip_tags($this->data_lancamento));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':url', $this->url);
        $stmt->bindParam(':data_lancamento', $this->data_lancamento);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT numero, url, DATE_FORMAT(data_lancamento,'%d/%m/%Y') data_lancamento   
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->numero = $row['numero'];
        $this->url = $row['url'];
        $this->data_lancamento = $row['data_lancamento'];
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET numero=:numero, url=:url, data_lancamento=:data_lancamento";

        $stmt = $this->conn->prepare($query);

        $this->numero = htmlspecialchars(strip_tags($this->numero));
        $this->url = htmlspecialchars(strip_tags($this->url));
        $this->data_lancamento = htmlspecialchars(strip_tags($this->data_lancamento));

        $stmt->bindParam(":numero", $this->numero);
        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(":data_lancamento", $this->data_lancamento);

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

        $query = "SELECT id, numero, url, DATE_FORMAT(data_lancamento,'%d/%m/%Y ') data_lancamento
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>