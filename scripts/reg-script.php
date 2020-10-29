<?php
require_once "../Classes/Register_class.php";

$email = $_POST['email'];
$name = $_POST['name'];
$pass1 = hash("sha256",$_POST['pass1']);
$pass2 = hash("sha256",$_POST['pass2']);

if(empty($email) || empty($name) || empty($pass1) || empty($pass2))
{
    echo "Заполните все поля!";
}
else
{
if($pass1 == $pass2)
{
$reg = new Register($email, $name, $pass1);
$reg->dataEnter();
header("Location: ../login.php");
}
else
{
echo "Пароли не совподают!";
}
}