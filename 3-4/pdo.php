<?php
  class PDOConfig{
    private $host;
    private $dbname;
    private $charset;
    private $user;
    private $password;
    private $options;
    private $dsn;
    public $pdo;
    
    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'checktest4';
        $this->charset = 'utf8';
        $this->user = 'root';
        $this->password = 'root';
        $this->dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=$this->charset";
        $this->options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
    }
    
    public function connect(){
        try{
            $this->pdo = new PDO($this->dsn, $this->user, $this->password, $this->options);
        } catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
            die();
        }
    }
  }
