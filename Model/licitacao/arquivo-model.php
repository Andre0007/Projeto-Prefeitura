<?php

class Arquivo {

    private $conn;
    private $table_name = "t11_arquivo";
    public $id_arquivo;
    public $tipo;
    public $nome_arquivo_url;
    public $nome_arquivo;
    public $ano;
    //FK
    private $table_name_FK = "t10_categoria_licitacao";
    public $id_categoria;
    public $descricao;

    public function __construct($db) {
        $this->conn = $db;
    }

    function delete() {

        $query = "UPDATE " . $this->table_name . " 
                     SET arq_status = 0
                   WHERE id_arquivo = ?";
        $stmt = $this->conn->prepare($query);
        $this->id_arquivo = htmlspecialchars(strip_tags($this->id_arquivo));
        $stmt->bindParam(1, $this->id_arquivo);
        
        if ($stmt->execute()) {           
            return true;
        }

        return false;
    }
    
    function deleteHistoricoFK() {

        $query = "UPDATE t12_log_download_arquivo
                     SET log_down_status = 0
                   WHERE id_arquivo = ?";
        $stmt = $this->conn->prepare($query);
        $this->id_arquivo = htmlspecialchars(strip_tags($this->id_arquivo));
        $stmt->bindParam(1, $this->id_arquivo);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET tipo = :tipo,
                         id_categoria = :id_categoria,
                         nome_arquivo_url = :nome_arquivo_url,
                         nome_arquivo = :nome_arquivo,
                         ano = :ano                        
                   WHERE id_arquivo = :id_arquivo";

        $stmt = $this->conn->prepare($query);

        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->id_categoria = htmlspecialchars(strip_tags($this->id_categoria));
        $this->nome_arquivo_url = htmlspecialchars(strip_tags($this->nome_arquivo_url));
        $this->nome_arquivo = htmlspecialchars(strip_tags($this->nome_arquivo));
        $this->ano = htmlspecialchars(strip_tags($this->ano));    
        $this->id_arquivo = htmlspecialchars(strip_tags($this->id_arquivo));   

        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':id_categoria', $this->id_categoria);
        $stmt->bindParam(':nome_arquivo_url', $this->nome_arquivo_url);
        $stmt->bindParam(':nome_arquivo', $this->nome_arquivo);
        $stmt->bindParam(':ano', $this->ano);  
        $stmt->bindParam(':id_arquivo', $this->id_arquivo);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT id_arquivo, nome_arquivo_url, nome_arquivo, id_categoria, ano, tipo 
                    FROM " . $this->table_name . "
                   WHERE id_arquivo = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_arquivo);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id_arquivo = $row['id_arquivo'];
        $this->nome_arquivo_url = $row['nome_arquivo_url'];
        $this->nome_arquivo = $row['nome_arquivo'];
        $this->id_categoria = $row['id_categoria'];
        $this->ano = $row['ano'];
        $this->tipo = $row['tipo'];
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET tipo=:tipo, 
                      id_categoria=:id_categoria,
                      nome_arquivo_url=:nome_arquivo_url, 
                      nome_arquivo=:nome_arquivo, 
                      ano=:ano,
                      arq_status = 1,
                      data_publicacao=:data_publicacao";

        $stmt = $this->conn->prepare($query);

        $this->tipo = htmlspecialchars(strip_tags($this->tipo));
        $this->id_categoria = htmlspecialchars(strip_tags($this->id_categoria));
        $this->nome_arquivo_url = htmlspecialchars(strip_tags($this->nome_arquivo_url));      
        $this->nome_arquivo = htmlspecialchars(strip_tags($this->nome_arquivo));
        $this->ano = htmlspecialchars(strip_tags($this->ano));        

        $stmt->bindParam(":tipo", $this->tipo);
        $stmt->bindParam(":id_categoria", $this->id_categoria);
        $stmt->bindParam(":nome_arquivo_url", $this->nome_arquivo_url);
        $stmt->bindParam(":nome_arquivo", $this->nome_arquivo);
        $stmt->bindParam(":ano", $this->ano);   
        $stmt->bindParam(":data_publicacao", $this->data_publicacao);

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
        
        $query = "SELECT T11.id_arquivo, 
                         T11.nome_arquivo, 
                         T11.ano, 
                         T11.tipo, 
                         T11.id_categoria,
                         T10.descricao
                    FROM " . $this->table_name . " T11
              INNER JOIN " . $this->table_name_FK . " T10 ON T11.id_categoria = T10.id_categoria
                   WHERE arq_status = 1
                ORDER BY T11.id_arquivo DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function listCategoria() {

        $query = "SELECT id_categoria, descricao
                    FROM " . $this->table_name_FK . "
                ORDER BY id_categoria";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>