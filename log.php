<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        *{
           margin: 0px;
            padding: 0px;
            color: white;
        }
        body{
            background-image: url(3D_Black_Abstract-High_quality_HD_Wallpaper_1366x768.jpg);
        }
    </style>
</head>
<body>
    <?php 

$email1=$_POST['email1'];
    $pass1=$_POST['pass1'];
    
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="logdb";
    
    $conn=new mysqli("$severname","$username","$password","$dbname");
    if($conn->connect_error)
    {
        echo" connection error";
    }
    else{
        echo " login";
    }
?>















</body>
</html>