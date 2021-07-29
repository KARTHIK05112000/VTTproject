<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <?php
    $head=$_POST['head'];
    $cod=$_POST['cod'];
    $down=$_POST['down'];
    $sel=$_POST['sel'];


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="addvid";
    if($sel=="java"){
        $conn=new mysqli("$servername","$username","$password","$dbname");
        if($conn->connect_error)
        {
            echo "<h1>database connection error</h1>";
        }
        else{
          echo '<script>
        alert("post susccessfully")
        </script>';
            include("addcode.php");
        }

         $sql= "insert into java values('$head','$cod','$down')";
$conn->query($sql);
    }
else{
    
        $conn=new mysqli("$servername","$username","$password","$dbname");
        if($conn->connect_error)
        {
            echo "<h1>database connection error</h1>";
        }
        else{
         echo '<script>
        alert("post susccessfully")
        </script>';
            include("addcode.php");
        }
    $sql= "insert into web values('$head','$cod','$down')";
$conn->query($sql);
}
    
    ?>
</body>
</html>