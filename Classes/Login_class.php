<?php
require_once "DB.php";

class Login
{
    public $email, $pass;
    function __construct($email, $pass)
    {
        $this->email = $email;
        $this->pass = $pass;
    }
    function dataCheck()
    {
        $conn = new DB('files','test','root','root');
        $conn->connect();
        $query = "SELECT * FROM users WHERE email=:email AND pass=:pass";
        $chck = $conn->connect()->prepare($query);
        $chck->execute([
            'email'=>"$this->email",
            'pass' =>"$this->pass"
        ]);
        return $chck->rowCount();
    }
}