<?php

    class conexaoBD {

        private $host = "localhost";
        private $db_name = "prefeitura_mairipora";
        private $username = "root";
        private $password = "";
        public $conn;

        public function getConnection(){
            $this->conn = null;
            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name .";charset=utf8", $this->username, $this->password);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }

    }
    
    function make_hash($str)
    {
        return sha1(md5($str));
    }

    function isLicitacaoLoggedIn()
    {
        if (!isset($_SESSION['LicitacaoLogged_in']) || $_SESSION['LicitacaoLogged_in'] !== true)
        {
            return false;
        }
        return true;
    }
    
    function isPrefeituraLoggedIn()
    {
        if (!isset($_SESSION['PrefeituraLogged_in']) || $_SESSION['PrefeituraLogged_in'] !== true)
        {
            return false;
        }
        return true;
    }
    
    function isHabitacaoLoggedIn()
    {
        if (!isset($_SESSION['HabitacaoLogged_in']) || $_SESSION['HabitacaoLogged_in'] !== true)
        {
            return false;
        }
        return true;
    }
    
    function isCidadaoOuvidoriaLoggedIn()
    {
        if (!isset($_SESSION['CidadaoOuvidoriaLogged_in']) || $_SESSION['CidadaoOuvidoriaLogged_in'] !== true)
        {
            return false;
        }
        return true;
    }
    
    function isOuvidorOuvidoriaLoggedIn()
    {
        if (!isset($_SESSION['OuvidorOuvidoriaLogged_in']) || $_SESSION['OuvidorOuvidoriaLogged_in'] !== true)
        {
            return false;
        }
        return true;
    }

?>