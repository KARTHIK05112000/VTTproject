<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>login</title>
    <script src="https://kit.fontawesome.com/06ccafa28b.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(img/3D_Black_Abstract-High_quality_HD_Wallpaper_1366x768.jpg);
        }
        /* log in form design start*/
        #log{
            display: block;
        }
         form{
            display: flex;
            flex-direction: column;
            justify-content: center;
             align-items: center;
             position: relative;
             top: 5cm;
        }
       input{
            width: 220px;
           height: 30px;
           margin: 12px;
           background: none;
           border: none;
            border-bottom:2px solid silver;
           font-size: 16px;
           color: azure;
           text-shadow: 1px 1px 13px gray;
        }
        input[type="submit"]{
            border: 2px solid silver;
            background: rgba(0,0,0,0.5);
            color: cornsilk;
            width: 74px;
            text-transform: uppercase;
        }
        input[type="submit"]:hover{
            background: black;
            padding: 0px;
            width: 84px;
            height: 35px
        }
        input::placeholder{
            font-size: 16px;
            text-transform: capitalize;
            color: silver;
            font-weight: 500;
            text-shadow: 1px 1px 7px gray;
            padding-left: 3px
        }
        input:focus{
          outline: none;
        }
        h1{
            text-align: center;
            color: antiquewhite;
            text-transform: uppercase;
        }
        .fas{
            position: relative;
            top: 1cm;
            left: -3.3cm;
            font-size: 20px;
            color: gray;
            
        }
        .far{
            text-align: center;
            font-size: 120px;
            color: gray;
            background: rgba(0,0,0,0.5);
            border-radius: 680px;
            box-shadow: 12px 12px 12px black;
            
        }
        
        a{
            color: white;
            background: rgba(0,0,0,0.5);
            padding: 3px;
            outline: 2px solid silver;
            font-size: 17px;
            cursor: pointer;
            margin-left:10px; 
        }
        h3{
         color: silver;
            text-transform: capitalize;
            animation:1s myalt 30;
        }
        @keyframes myalt{
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
        a:hover{
            background: black;
            padding: 5px;
        }
        select{
            width: 220px;
           height: 30px;
           margin: 12px;
           background: none;
           border: none;
            border-bottom:2px solid silver;
           font-size: 16px;
           color: azure;
           text-shadow: 1px 1px 13px gray;
        }
        option{
            background: none;
            color: black;
        }
        /* log in  form design end*/
        /* *********************/
        /* register form design start */
        #reg{
            display: none;
        }
        h2{
            color: red;
            text-align: center;
            font-family: monospace;
        }
    </style>
</head>
<body>
  <!-- log in form -->
   <div id="log"><form action="alllog.php" method="post">
    
     <i class="far fa-user-circle"></i>
      <h1>login</h1> 
      <?php
    echo "<h2>incorrect password or mailid</h2>";
    ?>
     <i class="fas fa-user"></i>
      <select name="opt">
          <option>ADMIN</option>
          <option>USER</option>
      </select>
      <i class="fas fa-envelope-square"></i>
       <input type="email" name="email1" placeholder="enter your email" required>
      <i class="fas fa-lock"></i>
       <input type="password" name="pass1" placeholder="password" required>
       <input type="submit" value="login">
       <h3>for new users: <a onclick="reg()">singup</a></h3>
       </form>
   </div> 
   <!-- *****resiter form******** -->
   <div id="reg">
    <form action="reg.php" method="post">
    
      <h1>signup</h1> 
       <i class="fas fa-envelope-square"></i>
        <input type="email" placeholder="enter your email" name="email" required>
        <i class="fas fa-user"></i>
        <input type="text" placeholder="username" name="uname" required>
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="enter your password" name="pass" id="p" required>
        <i class="fas fa-check-circle"></i>
        <input type="password" placeholder="confirm password" name="cpass" id="cp" required>
        <input type="submit" value="signup" id="sin">
        <h3>back to:<a onclick="log()">login</a></h3>
    </form>
   </div>
   <!--php section-->
   <!-- script section-->
   <script> 
       
      function reg(){
          document.getElementById("log").style.display="none";
           document.getElementById("reg").style.display="block";
          
      }
       function log(){
               document.getElementById("log").style.display="block";
           document.getElementById("reg").style.display="none";
       }
    </script>
</body>
</html>