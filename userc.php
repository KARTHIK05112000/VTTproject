<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user command</title>
</head>
<body>
    <?php
    $usern=$_POST['usern'];
    $usercc=$_POST['userc'];
    $email=$_POST['email'];
    
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="logdb";
    
    $conn=new mysqli("$servername","$username","$password","$dbname");
    if($conn->connect_error){
        echo "<h1>connection error</h1>";
    }
    else {
        echo '<script>
        alert("sent susccessfully")
        </script>';
        include("index 1.html");
    }
    $sql="insert into userc values('$usern','$usercc','$email')";
    $conn->query($sql);
    ?>
    
</body>
</html>