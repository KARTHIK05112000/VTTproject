<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
           margin: 0px;
            padding: 0px;
            color: white;
        }
        body{
            background-image: url(img/3D_Black_Abstract-High_quality_HD_Wallpaper_1366x768.jpg);
            
        }
        a{
          background: rgba(0,0,0,0.7);
            border: 2px solid silver;
            border-radius: 20px;
            padding: 7px 27px;
            position: relative;
            top: 8cm;
            text-decoration: none;
            font-size: 19px;
            
        }
        h1{
            position: relative;
            top: 7cm;
            animation: los 1s ;
            animation-iteration-count: infinite;
        }
         @keyframes los{
            0%{
                color: green;
            }
            50%{
                color: silver;
            }
            100%{
                color: green;
            }
        }

        #regs{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
     }
    </style>
</head>
<body>
    <?php 
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
     
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="logdb";
    
    if($pass!=$cpass){
        echo "<h1> confirm password is incorrect, please recheck that</h1>";
    }
    else{
        
        $conn=new mysqli("$servername","$username","$password","$dbname");
        if($conn->connect_error)
        {
            echo "<h1>database connection error</h1>";
        }
        else{
          header("location:log.html");
        }
         $sql= "insert into logd values('$email','$uname','$pass','$cpass')";
            $conn->query($sql);
    }
    
    ?>
</body>
</html>