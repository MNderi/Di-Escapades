<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logged.css">

    <title>Welkiee</title>
</head>
<body>

<div class="big-wrapper light">
    <img class='img0' src="./img/shape.png" alt="" class="shape">

    <header>
        <div class="container1">
            <div class="logo">
                <img class="img0" src="https://raw.githubusercontent.com/Mbuthey/LandingPage/main/images/5.png" alt="Logo">
                <h3>DI Escapades</h3>
            </div>

            <div class="links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="profiles.html">About</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#" class="btn">More</a></li>
                </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>
    </header>
</div> 
<?php 
$myForm=$_POST["$firstName"];
$myForm;
$message=`Welcome $firstName`;
echo "<h1 class='welkie'>".$myForm.$message."</h1>"

$formy=$_POST["$fname"]
$formy;
echo "<h1 class='welkie'>".$formy.$message."</h1>"
?>
<?php  
$formy=$_POST["$fname"]
$formy;
$message=`Welcome $firstName`;
echo "<h1 class='welkie'>".$formy.$message."</h1>"
?>

</body>
</html>