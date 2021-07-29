<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
  
   
    <form action="postvideo.php" method="post">
      <h1 style="text-align:center;">POST VIDEO</h1>
      <br><br><br><br><br>
       <input type="text" name="head" placeholder="enter heading"><br>
        <input type=text name="yl" placeholder="enter link here"><br>
        <select name="typ" >
            <option>technology</option>
            <option>coding</option>
        </select>
        <input type="submit" value="post">
    </form>
</body>
</html>