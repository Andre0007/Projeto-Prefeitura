<?php

class Arquivo {

    private $conn;
    private $table_name = "t03_noticia_imagens";
    private $table_name_impre = "t02_imprensa_pdf";
    private $table_name_governo = "t13_governo_imagem";
    public $id;
    public $nome;
    public $url;
    public $data_upload;

    public function __construct($db) {
        $this->conn = $db;
    }

    /* ===============
        Img Noticias 
       =============== */
    function deleteNoticias() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    
    function UploadNoticias() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET url=:url, data_upload=:data_upload";

        $stmt = $this->conn->prepare($query);
        $this->url = htmlspecialchars(strip_tags($this->url));

        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(":data_upload", $this->data_upload);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }
    
    function readAllNoticias() {

        $query = "SELECT id, url, DATE_FORMAT(data_upload,'%d/%m/%Y') data_upload
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    /* ==============
        PDF Imprensa 
       ============== */
    function deleteImprensa() {

        $query = "DELETE FROM " . $this->table_name_impre . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    
    function UploadImprensa() {

        $query = "INSERT INTO " . $this->table_name_impre . "
                  SET url=:url, data_upload=:data_upload";

        $stmt = $this->conn->prepare($query);
        $this->url = htmlspecialchars(strip_tags($this->url));

        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(":data_upload", $this->data_upload);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }
    
    function readAllImprensa() {

        $query = "SELECT id, url, DATE_FORMAT(data_upload,'%d/%m/%Y') data_upload
                    FROM " . $this->table_name_impre . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    /* ===============
        Img Governo 
       =============== */
    function deleteImgGoverno() {

        $query = "DELETE FROM " . $this->table_name_governo . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    
    function UploadImgGoverno() {

        $query = "INSERT INTO " . $this->table_name_governo . "
                  SET nome=:nome, url=:url, data_upload=:data_upload";

        $stmt = $this->conn->prepare($query);
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->url = htmlspecialchars(strip_tags($this->url));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(":data_upload", $this->data_upload);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }
    
    function readAllImgGoverno() {

        $query = "SELECT id, nome, url, DATE_FORMAT(data_upload,'%d/%m/%Y') data_upload
                    FROM " . $this->table_name_governo . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
}

?>