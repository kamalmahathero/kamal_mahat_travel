<?php
session_start();
if(!isset($_SESSION['ticket'])){
    header("location:home.php");
}
$userid = $_SESSION['userid'];
include('database.php');
$query = "select * from user where id = '$userid'";
$result = $conn->query($query);
$datauser=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
   <link rel="stylesheet" href="home.css">
    <title>Dashboard</title>
</head>
<body>
        <?php include('navbar.php') ?>
            <!-- Events -->
     <section class="events">
        <div class="title">
            <h1>Upcomming Events</h1>
            <div class="line"> </div>
        </div>
        <div class="row">
            <div class="col-md-3 pic">
                <img src="/final/img/event2.webp" alt="Event 2">
                <h4>Everest Campe Treak</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, delectus?</p>
                <a href="login.php" class="ctn">Learn More</a>
            </div>
    </section>
    
</body>
</html>