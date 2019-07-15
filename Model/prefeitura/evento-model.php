<?php
    
    class Evento {

    private $conn;
    private $table_name = "t04_calendario_eventos";
    public $id;
    public $title;
    public $data_inicio;
    public $data_termino;
    public $descricao;
    
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
                     SET title = :title, data_inicio = :data_inicio, data_termino = :data_termino, descricao = :descricao
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->data_inicio = htmlspecialchars(strip_tags($this->data_inicio));
        $this->data_termino = htmlspecialchars(strip_tags($this->data_termino));
        $this->descricao = $this->descricao;
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':data_inicio', $this->data_inicio);
        $stmt->bindParam(':data_termino', $this->data_termino);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT title, data_inicio, data_termino, descricao
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->data_inicio = $row['data_inicio'];
        $this->data_termino = $row['data_termino'];
        $this->descricao = $row['descricao'];
    }
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET title=:title, data_inicio=:data_inicio, data_termino=:data_termino, descricao=:descricao";

        $stmt = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->data_inicio = htmlspecialchars(strip_tags($this->data_inicio));
        $this->data_termino = htmlspecialchars(strip_tags($this->data_termino));
        $this->descricao = $this->descricao;

        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":data_inicio", $this->data_inicio);
        $stmt->bindParam(":data_termino", $this->data_termino);
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

        $query = "SELECT id, 
                         title, 
                         DATE_FORMAT(data_inicio,'%d/%m/%Y %H:%m:%s ') data_inicio,
                         DATE_FORMAT(data_termino,'%d/%m/%Y %H:%m:%s ') data_termino
                    FROM " . $this->table_name . " 
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function EventosAll() {

        $query = "SELECT id, 
                         title, 
                         data_inicio,
                         data_termino,
                         descricao
                    FROM " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readEventosFour() {

        $query = "SELECT title,
                         DATE_FORMAT(data_inicio,'%Y-%m-%d') data_inicio
                         FROM " . $this->table_name . "
                     ORDER BY id DESC
                     LIMIT 0, 4";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>