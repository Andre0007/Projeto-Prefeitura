<?php

class ArquivosHabitacao {

    private $conn;
    private $table_name = "t38_upload_imagens_habitacao";
    public $id;
    public $url;
    public $data_upload;

    public function __construct($db) {
        $this->conn = $db;
    }
    
    function UploadImagem() {

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

    function deleteImagem() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    
    function readAllImagens() {

        $query = "SELECT id, url, DATE_FORMAT(data_upload,'%d/%m/%Y %H:%m:%s') data_upload
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>