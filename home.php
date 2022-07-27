<?php
session_start();
if(isset($_SESSION['ticket'])){
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Oswald:wght@300&display=swap" rel="stylesheet"> 
    
    <title>Home</title>
    
</head>
<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Home</title>
</head>
<body>
    <div class="container">
        <?php include('navbar.php') ?>
        <div class="row">
            <div class="col">
                <h1>Welcome In Heaven</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem iste quo obcaecati quae, eaque nesciunt quos facilis dolo Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus voluptatem saepe assumenda quasi mollitia consequuntur esse explicabo nostrum aliquid veniam dolorem, vitae, nam, dolore minus doloribus eveniet et temporibus maxime iusto voluptates soluta sapiente similique? Reprehenderit, nesciunt tenetur? Laudantium, dicta vel, ab ipsa ducimus voluptate sint hic eius necessitatibus autem, natus vero possimus quas aut nisi.</p>
                <button type="button"><a href="sign-up.php">Sign Up Now.</a></button>
            </div>
        <div class="col">
            <a href="travel.php">
                <div class="card card1">
                    <h5>Pokhara</h5>
                    <p>Lorem r adipisicing elit. Deserunt, dignissimos?</p>
                </div>
            </a>
            <a href="travel.php">
            <div class="card card2">
                <h5>Jumla</h5>
                <p>Lorem ipsuming elit. Deserunt, dignissimos?</p>
            </div>
            </a>
            <a href="kathmandu.php">
            <div class="card card3">
                <h5>Kthmandu</h5>
                <p>Lorem ipsum dolor elit. Deserunt, dignissimos?</p>
            </div>
            </a>
            <a href="chitwon.php">
            <div class="card card4">
                <h5>Chitwan</h5>
                <p>Lorem ipsum dolor sit amet consectetur issimos?</p>
            </div>
            </a>
        </div>
    </div>
    
</body>
</html>