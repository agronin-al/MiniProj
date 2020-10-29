<?php

class DB 
{
    public $host,$dbname,$user,$pass;
    function __construct($host,$dbname,$user,$pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }
    function connect()
    {
       try{
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            return $pdo;
        }
        catch(PDOExpection $e)
        {
            echo "Ошибка при подключении к БД".$e->sendMessage();
        }
    }
}