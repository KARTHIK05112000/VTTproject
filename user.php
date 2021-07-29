<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user command</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            overflow: hidden;
        }
        #head{
            background-color: seagreen;
            width: 100%;
        }
        h1{
            text-align: center;
        }
        p{
            text-align: center;
            padding-bottom: 5px;
            color: bisque;
            font-size: 14px;
        }
        form{
            text-align: center;
            padding: 23px;
            
        }
        #from{
            background-color: rgba(0,0,0,.8);
            height: 700px;
        }
        textarea{
            width: 500px;
            height: 400px;
            font-size: 15px;
        }
        label{
            color: white;
            font-size: 17px;
        }
        input[type="submit"]{
            background: black;
            color: bisque;
            padding: 10px;
            width: 100px;
            
        }
    </style>
</head>
<body>
  <div id="head">
   <h1>command section</h1>
   <p>(your commands are private,admin can only see your messages)</p></div>
   <div id="from">
    <form action="userc.php" method="post">
      <label>username:</label>
       <input type="text" name="usern" required><br><br>
       <label>enter your command:</label><br>
        <textarea name="userc" placeholder="you have a doubt or command,please enter here"  wrap="hard" required></textarea><br><br>
        <label>enter email id:</label>
        <input type="email" name="email" required>
        <p>(for sent clearification message)</p><br><br>
        <input type="submit" value="post">
        
    </form></div>
</body>
</html>