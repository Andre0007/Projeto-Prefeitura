<?php

class Dashboard {

    private $conn;
    private $table_name = "t12_log_download_arquivo";
    public $count_downloads;
    public $count_cpf;    
    public $count_cnpj;
    public $count_ativados_download;
    public $count_desativado_download;
    public $count_ativados_arquivos;
    public $count_desativado_arquivos;
    
    public $nome_arquivo;
    public $total_downloads;

    public function __construct($db) {
        $this->conn = $db;
    }

    function readAll() {

        $query = "SELECT COUNT(id) AS count_downloads,
                        (SELECT COUNT(cpf_cnpj) FROM t12_log_download_arquivo WHERE CHAR_LENGTH(cpf_cnpj) = 14) AS count_cpf,
                        (SELECT COUNT(cpf_cnpj) FROM t12_log_download_arquivo WHERE CHAR_LENGTH(cpf_cnpj) > 14) AS count_cnpj,
                        (SELECT COUNT(cpf_cnpj) FROM t12_log_download_arquivo WHERE log_down_status = 1) AS count_ativados_download,
                        (SELECT COUNT(cpf_cnpj) FROM t12_log_download_arquivo WHERE log_down_status = 0) AS count_desativado_download,      
                        (SELECT COUNT(id_arquivo) FROM t11_arquivo WHERE arq_status = 1) AS count_ativados_arquivos,
                        (SELECT COUNT(id_arquivo) FROM t11_arquivo WHERE arq_status = 0) AS count_desativado_arquivos
                   FROM " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->count_downloads = $row['count_downloads'];
        $this->count_cpf = $row['count_cpf'];
        $this->count_cnpj = $row['count_cnpj'];        
        $this->count_ativados_download = $row['count_ativados_download'];
        $this->count_desativado_download = $row['count_desativado_download'];
        $this->count_ativados_arquivos = $row['count_ativados_arquivos'];
        $this->count_desativado_arquivos = $row['count_desativado_arquivos'];
    }
    
    function readListaDownloads() {
        
        $query = "SELECT T11.nome_arquivo AS nome_arquivo,
			 COUNT(T12.id_arquivo) AS total_downloads
                    FROM " . $this->table_name . " T12
              INNER JOIN t11_arquivo T11 ON T12.id_arquivo = T11.id_arquivo
	           WHERE T11.arq_status = 1
	        GROUP BY T12.id_arquivo";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>