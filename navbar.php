
<link type="text/css" rel="stylesheet" href="home.css" />
<style>
    .navbar{
        background: rgb(0,0,0,0.3);
        border-radius: 20px;
    }

nav{
    flex: 1;
    text-align:left;

}
nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 60px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
    font-size: 13px;

}

    </style>
<div class="navbar">
            <!-- <img src="/final/img/logo.jpg" alt="" class="logo"> -->
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="#">Products</a></li>
                    <?php if (isset($_SESSION['ticket'])) {
                        echo "<li><a href='logout.php'>Log Out</a></li>";
                    } else {
                        echo "<li> <a href='login.php'> Log In</a></li>";
                    } ?>
                    <li><a href="#">About</a></li>
                </ul>
                <!-- <img src="/final/img/menu.jpg" class="menu-icon" alt="menu bar"> -->
            </nav>
        </div>