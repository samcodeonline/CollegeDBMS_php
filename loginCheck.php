<?php 

error_reporting(0);

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

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name= $_POST['username'];
    $pass= $_POST['password'];


    $sql = "select * from user where username= '".$name."'AND password= '".$pass."'";

    $result = mysqli_query($data,$sql);

    $row= mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {

        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "student";

        header("location:studenthome.php");
    }

    elseif($row["usertype"]=="admin"){
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "admin";
        header("Location:adminhome.php");
    }

    else{


        $message = "username and password do not match";

        $_SESSION['loginMessage']=$message;

        header("location:login.php");
    }
}

?>