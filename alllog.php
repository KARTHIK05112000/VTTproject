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
            background-image: url(3D_Black_Abstract-High_quality_HD_Wallpaper_1366x768.jpg);
        }
        a{
          background: rgba(0,0,0,0.7);
            border: 2px solid silver;
            border-radius: 20px;
            padding: 7px 27px;
            position: relative;
            top: 8cm;
            
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

        #home{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
     }
        #loading{
            display: none;
        }
        
        
       #loading
      {
        display: flex;
        justify-content: center;
        align-self: center;
        vertical-align: middle;
        margin-top: 50%;
    
      }
      @keyframes box{
        0%{
          top: 10;
        }
        50%{
        top: 0;
        }
      100%{
        top: 10;
      }
      }
      #bb{
        width: 10px;
        height: 10px;
        background: #1276ff;
        border-radius: 50px;
        margin-left: 10px;
        position: relative;
        top: 10px;
         animation: box 3s ease infinite;
         animation-delay: 0s;
      }
      
      #br{
        width: 10px;
        height: 10px;
        background: #e55757;
        border-radius: 50px;
        margin-left: 10px;
         position: relative;
        top: 10px;
         animation: box 3s ease infinite;
      
        animation-delay: 0.5s;
      }
      
      #by{
        width: 10px;
        height: 10px;
        background: #e6b001;
        border-radius: 50px;
        margin-left: 10px;
         position: relative;
        top: 10px;
         animation: box 3s ease infinite;
      
        animation-delay: 1s;
      }
      
      #bb1{
        width: 10px;
        height: 10px;
        background: #1276ff;
        border-radius: 50px;
        margin-left: 10px;
         position: relative;
        top: 10px;
         animation: box 3s ease infinite;
         animation-delay: 1.5s;
      }
      
      #bg{
        width: 10px;
        height: 10px;
        background: #3bc476;
        border-radius: 50px;
        margin-left: 10px;
         position: relative;
        top: 10px;
         animation: box 3s ease infinite;
      
        animation-delay: 2s;
      }
      
      #br1{
        width: 10px;
        height: 10px;
        background: #e55757 ;
        border-radius: 50px;
        margin-left: 10px;
         position: relative;
        top: 10px;
         animation: box 3s ease infinite;
      
        animation-delay: 2.5s;
      } 
    </style>
</head>
<body>
    <?php 
$opt=$_POST['opt'];
$email1=$_POST['email1'];
    $pass1=$_POST['pass1'];
    if($opt=="USER"){ 
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="logdb";
    
    $conn=new mysqli("$severname","$username","$password","$dbname");
    if($conn->connect_error)
    {
        echo" connection error";
    }
   
     $sql="select * from logd where email='$email1' and password='$pass1'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        
        
         header("location:index 1.php"); 
    }
    else{
        header("location:log1.php");
    }
    }
    else if($opt=="ADMIN"&&$email1=="karthik25325@gmail.com"&&$pass1="2104"){
        header("location:aread.php");
    }
    else{
        header("location:log1.php");
    }
?>

</body>
</html>