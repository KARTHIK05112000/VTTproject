<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <style>
        *{
           margin: 0px;
            padding: 0px;
        }
        body{
              background-color: darkslategray;
        }
        form{
            text-align: center;
            position: relative;
            top: 200px;
           
        }
        input{
            margin: 10px;
            width: 300px;
            height: 30px;
        
 }
        input[type="submit"]{
                  margin: 10px;
            width: 100px;
            height: 30px;
                    background-color: cadetblue;
        }
    </style>
</head>
<body>
    <form action="postcode.php" method="post">
    <h1 style="text-align:center;">POST CODE</h1>
    <br><br><br><br><br>
    <h3>enter heading:</h3>
    <input type="text" name="head"><br>
    <h3>enter code:</h3>
     <textarea name="cod"  cols="30" rows="10"></textarea><br>
     enter download link:
     <textarea name="down"></textarea><br>
     <select name="sel">
         <option>java</option>
         <option>web</option>
     </select>
     <input type="submit" value="post">
    </form>
</body>
</html>