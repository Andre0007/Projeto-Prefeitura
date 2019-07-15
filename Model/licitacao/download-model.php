<?php

class Download {

    private $conn;
    private $table_name = "t12_log_download_arquivo";
    public $id;
    public $cpf_cnpj;
    public $nome;
    public $email;
    public $telefone;
    //FK
    private $table_name_fk = "t11_arquivo";
    public $id_arquivo;
    public $nome_arquivo_url;
    public $nome_arquivo;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET cpf_cnpj=:cpf_cnpj, nome=:nome, email=:email, telefone=:telefone, id_arquivo=:id_arquivo, log_down_status=1";

        $stmt = $this->conn->prepare($query);

        $this->cpf_cnpj = htmlspecialchars(strip_tags($this->cpf_cnpj));
        $this->nome = htmlspecialchars(strip_tags($this->nome));      
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));
        $this->id_arquivo = htmlspecialchars(strip_tags($this->id_arquivo));

        $stmt->bindParam(":cpf_cnpj", $this->cpf_cnpj);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":id_arquivo", $this->id_arquivo);

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

        $query = "SELECT T12.id,
                         T12.cpf_cnpj, 
                         T12.nome, 
                         T12.email, 
                         T12.telefone, 
                         T12.id_arquivo,
                         T11.nome_arquivo
                    FROM " . $this->table_name . " T12 
              INNER JOIN " . $this->table_name_fk . " T11 ON T12.id_arquivo = T11.id_arquivo
                   WHERE log_down_status = 1
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readOne() {

        $query = "SELECT nome_arquivo_url
                    FROM " . $this->table_name_fk . "
                   WHERE id_arquivo = ? ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_arquivo);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome_arquivo_url = $row['nome_arquivo_url'];
    }

}

?>