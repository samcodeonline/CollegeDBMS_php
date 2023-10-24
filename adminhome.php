<?php


session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

elseif($_SESSION['usertype'] == 'student'){
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
    <title>Admin Dashboard</title>
</head>
<body>
    <!-- <h1>AdminHOME</h1>

    <a href="logout.php">LOGOOUT</a> -->
    <header class="header">
        <a href="http://">Admin Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="btn btn-success ">Logout</a>
        </div>
       
    </header>

        <aside>

        <ul>
            <li><a href="">Admission</a></li>
            <li><a href="">AddTeacher</a></li>
            <li><a href="">ViewTeacher</a></li>
            <li><a href="">AddCourses</a></li>
            <li><a href="">ViewCourses</a></li>
        </ul>
        </aside>

        <div class="content">


            <h1>
                Sidebar Accordion
            </h1>

            <p>
                In this example ,we have added an accordion and a dropdown menu inside the side navigation.

                Click on both to uderstand how they differ from each other. The accordion will push down the content , while the dropdown lays over the content.
            </p>


        </div>
</body>
</html>