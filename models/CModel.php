<?php

class Cmodel {

    private $pdo;
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    function __construct() {
        $this->host = '127.0.0.1';
        $this->db = 'nike';
        $this->user = 'root';
        $this->pass = '';
        $this->charset = 'utf8';
        $this->connect();
    }



    function connect(){
        try {
            $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';charset='.$this->charset.'',
            $this->user,
            $this->pass, 
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
        } catch (Exception $e) {
            die('Connection failed : ' . $e->getMessage());
        }
        return $this->pdo;
    }

    function __destruct(){
        $this->disconnect();
    }

    function disconnect()
    {
        if ($this->pdo) {
            $this->pdo = null;
        }
    }

    public function GetData(){

         
        $result = $this->pdo->query('SELECT * FROM goods');

        $arrayResult = $result->fetchAll();

         return $arrayResult;

    }
    public function GetDataNews(){


         
        $result = $this->pdo->query('SELECT * FROM news ORDER BY news_date DESC LIMIT 3');

        $arrayResult = $result->fetchAll();

         return $arrayResult;

    }

    public function GetDataCollections(){

         
        $result = $this->pdo->query('SELECT * FROM collections');

        $arrayResult = $result->fetchAll();


         return $arrayResult;

    }

    public function GetDataLikes(){

        


        
         
        $result = $this->pdo->query('SELECT * FROM likes');

        $arrayResult = $result->fetchAll();

         return $arrayResult;

    }




}