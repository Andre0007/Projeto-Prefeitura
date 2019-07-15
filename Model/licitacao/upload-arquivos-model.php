<?php
class Upload {

    private $conn;
    private $table_name = "t11_arquivo_uploads";
    public $id_upload;
    public $url_arquivo;
    public $data_upload;

    public function __construct($db) {
        $this->conn = $db;
    }

    function delete() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id_upload = ?";
        $stmt = $this->conn->prepare($query);
        $this->id_upload = htmlspecialchars(strip_tags($this->id_upload));
        $stmt->bindParam(1, $this->id_upload);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET  url_arquivo=:url_arquivo, data_upload=:data_upload";

        $stmt = $this->conn->prepare($query);

        $this->url_arquivo = htmlspecialchars(strip_tags($this->url_arquivo));     

        $stmt->bindParam(":url_arquivo", $this->url_arquivo);
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

    function readAll() {
        
        $query = "SELECT id_upload, url_arquivo, DATE_FORMAT(data_upload,'%d/%m/%Y') data_upload
                    FROM " . $this->table_name . "
                ORDER BY id_upload DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}
?>
