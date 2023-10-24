<?php


session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype'] == 'admin'){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>Student Dashboard</title>
</head>
<body>
    <!-- <h1>AdminHOME</h1>

    <a href="logout.php">LOGOOUT</a> -->
    <header class="header">
        <a href="http://">Student Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="btn btn-success ">Logout</a>
        </div>
       
    </header>

        <aside>

        <ul>
            <li><a href="">My Courses</a></li>
            <li><a href="">My Result</a></li>
            
        </ul>
        </aside>

        
</body>
</html>