<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login Form</title>
</head>
<body background="school2.jpg" class="bodyBg">
    <center>
        <div class="FormDesign">

        <center class="
        Title">
            Login Form

            <h4>
                <?php 

                error_reporting(0);
                session_start();
                session_destroy();
                    echo $_SESSION['loginMessage'];
                ?>
            </h4>
        </center>
            <form action="loginCheck.php" method="POST" class="LoginForm">

                <div>
                    <label class="labelDeg" for="">Username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="labelDeg" for="">Password</label>
                    <input type="Password" name="password">
                </div>

                <div>
                    
                    <input class="LoginBtn" type="submit" name="submit" value="login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>