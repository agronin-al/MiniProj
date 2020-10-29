<?php
require_once "DB.php";

class Register
{
    public $email, $name, $pass1;

    function __construct($email, $name, $pass1)
    {
        $this->email = $email;
        $this->name = $name;
        $this->pass1 = $pass1;
    }

    function dataEnter()
    {
        $query = "INSERT INTO users VALUES (NULL,'{$this->email}','$this->name','$this->pass1')";
        $conn = new DB('files','test','root','root');
        $conn->connect();
        $conn->connect()->query($query);
    }
}
