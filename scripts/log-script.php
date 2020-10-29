<?php
require_once "../Classes/Login_class.php";

$email = $_POST['email'];
$pass = hash("sha256",$_POST['pass']);

if(empty($email) || empty($pass))
{
    echo "Заполните все поля!";
}
else
{
    $log = new Login($email,$pass);
    if($log->dataCheck()==1)
    {
        header("Location: ../profile.php");
    }
    else
    {
        echo "Логин или пароль не верны!";
    }
}