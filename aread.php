<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin read</title>
    <style>
        body{
background: darkslategray;
        }
        #vid{
            display: none;
        }
        #code{
            display: none;
        }
        h1{
            color: aquamarine;
            font-size: 17px;
            font-family: monospace;
            text-align: center;
        }
    
    h2{
        color: aliceblue;
        font-size: 15px;
        font-family: cursive;
        text-align: center;
        }
        
        
        #nav
        {
            position: sticky;
            position: -webkit-sticky;
            background-color: rgba(0,0,0,.9);
            color: aqua;
            display: flex;
            justify-content: center;
            align-items: center;
             
            padding: 20px;
        }
        #nav a{
            color: coral;
            font-weight: 700;
            background-color: bisque;
            padding: 6px;
            border: 2px solid black;
            border-radius: 10px;
            text-decoration: none;
            margin-left: 30px;
        }
        #nav h1
        {
            color: coral;
            font-weight: 700;
            font-size: 20px;
        }
    </style>
</head>
<body>
   <div id="nav">
       <h1>ADMIN PAGE</h1>
       <a onclick="mycmd()">read command</a>
        <a onclick="myvid()">addvideo</a>
           <a onclick="mycd()">addcode</a>
       <a href="index.php">logout</a>
       
   </div>
   <div id="command">
    <?php
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "logdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, usercommand,email FROM userc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div id=com>s<h1>username:</h1>" ."<h2>". $row["username"]."</h2>". "<br><h1>command:</h1>". "<h2>".$row["usercommand"]. "</h2><br>"."<br><h1>email:</h1>"."<h2>".$row["email"]."</h2><br></div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
<div id="vid">
    <?php include("addvideo.php");
    ?>
</div>
<div id="code">
    <?php include("addcode.php");
    ?>
</div>
<script>
    function mycmd(){
        document.getElementById('command').style.display="block";
        document.getElementById('vid').style.display="none";
        document.getElementById('code').style.display="none";
    }
    function myvid(){
        document.getElementById('command').style.display="none";
        document.getElementById('vid').style.display="block";
        document.getElementById('code').style.display="none";
    }
    function mycd(){
        document.getElementById('command').style.display="none";
        document.getElementById('vid').style.display="none";
        document.getElementById('code').style.display="block";
    }
    </script>
</body>
</html>