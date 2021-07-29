<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $head=$_POST['head'];
    $yl=$_POST['yl'];
    $typ=$_POST['typ'];
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="addvid";
    
    
        if($typ=="technology"){
        $conn=new mysqli("$servername","$username","$password","$dbname");
        if($conn->connect_error)
        {
            echo "<h1>database connection error</h1>";
        }
        else{
          echo "post success";
        }
         $sql= "insert into youtube values('$head','$yl')";
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
            include("aread.php");
        }
         $sql= "insert into cvid values('$head','$yl')";
            $conn->query($sql);
    }
    ?>
</body>
</html>