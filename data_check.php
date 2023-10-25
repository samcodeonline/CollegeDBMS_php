<?php


$host = "localhost";
$username = "root";
$pass = "";
$database = "SchoolProject";


$data = new mysqli($host,$username,$pass,$database);
if($data === false)
{
    die("Could not connect to database");
}


if(isset($_POST['apply']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
   


    $sql = "INSERT INTO 'admission' (name, email, phone, message) VALUES ('$name','$email',)";


    if($sql === TRUE){
        echo "successfully added";
    }
    else{
        echo "failed to add admission";
    }
}