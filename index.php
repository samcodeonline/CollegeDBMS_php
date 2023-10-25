<?php 
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message']){
        $message = $_SESSION['message'];

        echo "<script type='text/javascript'>
        
            alert('$message');
        </script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>StudentManagment</title>
</head>
<body>
    <nav >
        <label for="" class="logo">LACAS-School</label>
        <ul>
            <li><a href="" class="fw-bolder ">Home</a></li>
            <li><a href="" class="fw-bolder ">AboutUs</a></li>
            <li><a href="" class="fw-bolder ">Contact</a></li>
            <li><a href="login.php" class="btn btn-success fw-bolder">Login</a></li>

        </ul>
    </nav>

    <!-- mainSection -->
    <div class="section1">
        <label for="" class="imgText">We Teach Students With Care</label>
        <img src="school_management.jpg" alt="school_management" srcset="" class="mainImg">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="WelcomeImg" src="school2.jpg" alt="school" srcset="">
            </div>
            <div class="col-md-8">
                <h1>
                    WELCOME to LACAS-SCHOOL
                </h1>
                <p>
                My idea about a good school is ....in a school there should be a big play ground where students could play nicely. Laibrary should should be there in the school so , that students could be able to gain more extra knowledge. There should be good teacher because without teacher the school could not go long. Teachers should have better understanding with there students . They should be very friendly to them . Smart projectors should be there for study..computer lad should be there. Rules and regulations of the school should be strict . There should be no descrimination between intelligent and weak...rich or poor students.
                My idea of good school is
                •School should be placed very far from the industrial area and from main roads

                • Have good administration , authorities and rules and regulations .

                • Have big playground

                • Teachers must be friendly and teaches good values to the students.


                </p>
            </div>
        </div>
    </div>

    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            <img class="teacher" src="teacher1.jpg" alt="">
            <p class="fw-bolder">
                He is the best teacher for chemistry
            </p>
            </div>
            <div  class="col-md-4"><img class="teacher" src="teacher2.jpg" alt="">
            <p class="fw-bolder">
                He is the best teacher for biology
            </p></div>
            <div  class="col-md-4"><img class="teacher" src="teacher3.jpg" alt="">
            <p class="fw-bolder">
                He is the best teacher for Zoology
            </p></div>
        </div>
    </div>



    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            <img class="teacher" src="web.jpg" alt="">
            <p class="fw-bolder">
                Web development
            </p>
            </div>
            <div  class="col-md-4"><img class="teacher" src="graphic.jpg" alt="">
            <p class="fw-bolder">
              Graphics Course
            </p></div>
            <div  class="col-md-4"><img class="teacher" src="marketing.png" alt="">
            <p class="fw-bolder">
               Marketing Course
            </p></div>
        </div>
    </div>

    <center>
        <h1>
            Admission Form
        </h1>
    </center>

    <div class="admissionForm" align="center">
        <form action="data_check.php" method="POST">
            <div class="adminInt" >
                <label class="LabelText" for="">Name</label>
                <input class="inputDesign" type="text" name="name">
            </div>
            <div class="adminInt">
                <label class="LabelText" for="">Email</label>
                <input class="inputDesign" type="email" name="email">
            </div>
            <div class="adminInt"> 
                <label class="LabelText" for="">Phone</label>
                <input class="inputDesign" type="text" name="phone">
            </div>
            <div class="adminInt">
                <label class="LabelText" for="">Message</label>
                <input type="text" class="inputDesign" name="message">
               
            </div>
            <div class="adminInt">
                
                <input class='SubmitBtn' type="submit" id="submit" value="apply" name="apply">
            </div>

        </form>
    </div>

<div class="FooterBg mt-3">
    <center class="fw-bolder fs-2 footerTextWhite">
        All Rights Reserved!!
    </center>

    <center>
        <p class="footerTextWhite">2023 @rights reserved </p>
    </center>
    <p>

    </p>



</div>
</body>
</html>