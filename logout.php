<?php
session_start();
unset($_SESSION["ticket"]);
unset($_SESSION["userid"]);
header("Location:home.php");
?>