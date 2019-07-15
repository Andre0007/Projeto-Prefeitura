<?php

class Noticias {

    private $conn;
    private $table_name = "t03_noticia";
    public $id;
    public $titulo;
    public $subtitulo;
    public $descricao;
    public $data_postagem;
    public $imagem_capa;

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
                         subtitulo = :subtitulo,
                         descricao = :descricao,
                         imagem_capa=:imagem_capa                        
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->subtitulo = htmlspecialchars(strip_tags($this->subtitulo));
        $this->descricao = $this->descricao;
        $this->imagem_capa = $this->imagem_capa;
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':subtitulo', $this->subtitulo);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':imagem_capa', $this->imagem_capa);
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
                      subtitulo=:subtitulo, 
                      descricao=:descricao, 
                      data_postagem=:data_postagem,
                      imagem_capa=:imagem_capa";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->subtitulo = htmlspecialchars(strip_tags($this->subtitulo));
        $this->descricao = $this->descricao;
        $this->imagem_capa = htmlspecialchars(strip_tags($this->imagem_capa));

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":subtitulo", $this->subtitulo);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":data_postagem", $this->data_postagem);
        $stmt->bindParam(":imagem_capa", $this->imagem_capa);

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
                         subtitulo,
                         DATE_FORMAT(data_postagem,'%d/%m/%Y %H:%m:%s ') data_postagem
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readList() {

        $query = "SELECT imagem_capa,
                         id, 
                         titulo, 
                         subtitulo, 
                         DATE_FORMAT(data_postagem,'%d/%m/%Y') data_postagem
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readOne() {

        $query = "SELECT imagem_capa,
                         titulo, 
                         subtitulo, 
                         descricao, 
                         DATE_FORMAT(data_postagem,'%d/%m/%Y') data_postagem 
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        $this->titulo = $row['titulo'];
        $this->subtitulo = $row['subtitulo'];
        $this->descricao = $row['descricao'];
        $this->data_postagem = $row['data_postagem'];
        $this->imagem_capa = $row['imagem_capa'];
    }
    
    function readThree() {

        $query = "SELECT id, 
                         titulo, 
                         subtitulo,
                         imagem_capa
                         FROM " . $this->table_name . "
                     ORDER BY id DESC
                        LIMIT 0, 3";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readFour() {

        $query = "SELECT id, 
                         titulo,
                         DATE_FORMAT(data_postagem,'%d/%m/%Y') data_postagem,
                         imagem_capa
                         FROM " . $this->table_name . "
                     ORDER BY id DESC
                     LIMIT 3, 4";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readUltimas() {

        $query = "SELECT id, 
                         titulo, 
                         DATE_FORMAT(data_postagem,'%d/%m/%Y') data_postagem,
                         imagem_capa
                         FROM " . $this->table_name . "
                     ORDER BY id DESC
                        LIMIT 0, 5";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readNoticiasAntigas() {

        $query = "SELECT id, 
                         titulo, 
                         subtitulo,                           
                         DATE_FORMAT(data_postagem,'%d/%m/%Y') data_postagem,
                         imagem_capa
                    FROM " . $this->table_name . "
                   WHERE id < ?
                ORDER BY id DESC
                   LIMIT 2 ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        return $stmt;
    }

}

?>