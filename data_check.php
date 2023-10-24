<?php

session_start();

$host = "localhost";
$username = "root";
$pass = "";
$database = "SchoolProject";


$data = mysqli_connect($host,$username,$pass,$database);

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


    $sql="INSERT INTO `admission` (`id`, `name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message');";


    $result = mysql_query($data, $sql);

    if($result){
        $_SESSION ['message'] ="your application sent successfully.";

        header("location:index.php");
    }
    else{
        $_SESSION ['message'] ="your application falied to proceed.";
    }
}