<?php

class RegPerguntasFrequentes {

    private $conn;
    private $table_name = "t29_regularizacao_perguntas_habitacao";
    public $id;
    public $pergunta;
    public $resposta;
    public $data_inscricao;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    function readAll() {
        $query = "SELECT id, pergunta, DATE_FORMAT(data_inscricao,'%d/%m/%Y %H:%m:%s') data_inscricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET pergunta=:pergunta, resposta=:resposta, data_inscricao=NOW()";

        $stmt = $this->conn->prepare($query);

        $this->pergunta = htmlspecialchars(strip_tags($this->pergunta));
        $this->resposta = htmlspecialchars(strip_tags($this->resposta));

        $stmt->bindParam(":pergunta", $this->pergunta);
        $stmt->bindParam(":resposta", $this->resposta);

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
                     SET pergunta = :pergunta,
                         resposta = :resposta
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->pergunta = htmlspecialchars(strip_tags($this->pergunta));
        $this->resposta = htmlspecialchars(strip_tags($this->resposta));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':pergunta', $this->pergunta);
        $stmt->bindParam(':resposta', $this->resposta);
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

        $query = "SELECT pergunta, resposta
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->pergunta = $row['pergunta'];
        $this->resposta = $row['resposta'];
    }
    
    function readList() {
        $query = "SELECT id, pergunta, resposta, ( select MAX(id) FROM t29_regularizacao_perguntas_habitacao ) as UltimoId
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>