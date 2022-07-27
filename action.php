<?php
session_start();
include("database.php");
if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5( $_POST['password']);
    $repeatpassword = md5($_POST['repeatpassword']);
   

$query = "insert into user (id,name,email,password,repeatpassword) 
values (NULL, '$name', '$email','$password','$repeatpassword')";

$conn ->query($query);
header("location:home.php");
}

if(isset($_POST['login']))
{
    $email = $_POST['mail'];
    $password = md5($_POST['pwd']);
   

$query = "select * from user where email = '$email'and password = '$password'";
$result = $conn -> query($query);
$userdata = $result->fetch_assoc();
$count = $result->num_rows;
if($count == 0){
    echo "Invalid!!";
}
else{
    $_SESSION['ticket'] = 'okay';
    $_SESSION['userid'] = $userdata['id'];
    header("location:dashboard.php");
}

}

    if(isset($_POST['add_loc'])){

    $location = $_POST['addlocation'];
    $features = $_POST['addfeatures'];
    $region = $_POST['addregion'];
    $cost = $_POST['addcost'];
    $addpicture = $_FILES['picss']['name'];
    $ext = pathinfo($_FILES['addpic']['name'], PATHINFO_EXTENSION);
    //$ext = $FILES($addpicture);
    $random = rand(1,1000000000);
    $newpicname = $random."_myproduct_.".$ext;

    
    if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="raw" || $ext=="eps")
    {
    move_uploaded_file($_FILES['addpic'] ['tmp_name'], "products_images/$newpicname");

    $insert = "insert into locations(id, location, features, region, cost, picture) 
    values (NULL, '$location', '$features', '$region', '$cost', '$newpicname' )";
    $conn->query($insert);

    }
    else{
        echo "khvbjh";
    }
}



?>