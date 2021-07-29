<html>
  <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="icon" href="logovb.jpg" type="image/jpg" sizes="16x16">
    <title>ViberTechTamil-OFFICIAL</title>
    <meta name="keywords" content="ViberTechTamil,vibertech,viber,viberstatus,techtamil,vibertech,vtt,HTML,CSS,JavaScript,Java">
    <meta charset="UTF-8">
  <meta name="description" content="Learn coding online,coding demo videos, techvideos,web development,java,html,CSS">
    
    <script src="indexjs.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/06ccafa28b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital@0;1&family=Chakra+Petch&family=Courgette&family=Goldman&family=Kalam:wght@300;400&family=Rajdhani:wght@300;400&family=Sacramento&family=Teko:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="indexcss.css">
    
  </head>
  <body>
    <div id="ful">
      <div id="header">
        <img src="img/logovb.jpg" id="logo">
        <div id="nav">
          <ul id="menu">
          <li><button class="nb" id="nb3"><a href="index.php" target="_self"><i class="fas fa-user"></i>log out</a></button></li>
          <li><button class="nb" id="nb3"><a href="user.php" target="_self"><i class="fas fa-user"></i>user command</a></button></li>
          <li><button class="nb" id="nb3" onclick="mycode()"><i class="fas fa-code"></i>Coding</button></li>
            <li><button class="nb" id="nb2" onclick="myvideo()"><i class="fab fa-youtube"></i>Videos</button></li>
              <li><button class="nb" id="nb1" onclick="myhome()"><i class="fas fa-home"></i>Home</button></li>
            
            
          </ul>
          
        </div>
      </div>
      <!__content__>
      <div id="contain">
      <!__coding page__>
        <div id="code">
          <div id="opt">
            <i class="fas fa-filter" style="padding-top:10px;"></i>
            <h1 id="flt">Filter :</h1>
            <button id="java" class="fb" onclick="myjava()"><i class="fab fa-java"></i> JAVA</button>
            <button id="web" class="fb" onclick="myweb()"><i class="fab fa-html5"></i> WEB</button>
          </div>
          <div id="java1">
        <?php
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "addvid";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT head, program, download FROM java";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<details><summary>".$row["head"]."</summary><section><p>".$row["program"]."</p></section>".$row["download"]."</details>";
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
          </div>
          <div id="webc">
            
               <?php
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "addvid";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT head, program,download FROM web";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<details><summary>".$row["head"]."</summary><section><p>".$row["program"]."</p></section>".$row["download"]."</details>";
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
          </div>
        </div>
        <!__video__>
        <div id="video">
          <div id="optv">
                        <i class="fas fa-filter" style="padding-top:10px;"></i>
            <h1 id="flt">Filter :</h1>
            <button id="cvd" class="fb" onclick="mycv()"><i class="fas fa-laptop-code"></i>codingvideo</button>
            <button class="fb" id="tn" onclick="mytnv()"><i class="far fa-file-video"></i>technews</button>
          </div>
          <div id="cvp">
            <?php
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "addvid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT head, link FROM cvid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h2>".$row["head"]."</h2><br>".$row["link"];
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
          </div>
          <div id="tnp">
           <?php
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "addvid";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT head, link FROM youtube";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<h2>".$row["head"]."</h2><br>".$row["link"];
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
          </div>
        </div>
        <!__home page__>
        <div id="home">
          <div id="vtt">
          
          </div>
          <div id="vtta">
            <h1 id="he1">Welcome To ViberTechTamil</h1>
            <p id="p1">
              ViberTechTamil is a YouTube channel in which not only technology related videos but also coding related videos are uploaded. Subscribe to our channel to get more videos.<br>
              viber tech tamil is now web application.yes,our thougt is every one be a programmer is our aim but we don't do nothing without your help. we need your help but not finacialy,we need your support only.please see the page content and see the coding.
          </p>
          </div>
          <div id="htmlp">
            
          </div>
          <div id="htmlc">
            <h1 id="he1">Uses Of HTML</h1>
            <p id="p1">1. Web pages development
HTML is heavily used for creating pages that are displayed on the world wide web. Every page contains a set of HTML tags including hyperlinks which are used for connecting to other pages. Every page that we witness, on the world wide web, is written using a version of HTML code.
<br>
2. Web document Creation
Document creation on the internet is dominated by HTML and its basic concept via tag and DOM i.e. document object model. HTML tags are inserted before and afterward or phrases to locate their format and location on the page. A web document consists of three sections: title, head, and body. Head includes the information to identify the document, including title and any other important keyword. A title can be seen on the browser’s bar and the body section is the main portion of the website visible to the viewer. All three segments are designed and created by the uses of HTML tags. Every section has its own specific set of tags, which are dedicatedly rendered keeping the head, title and body concepts in a loop.
<br>
3. Internet navigation
This is one of the most important uses of HTML which is revolutionary. This navigation is possible by utilizing the concept of Hypertext. It is basically a text which refers to other web pages or text and when user click on it, would navigate to referenced text or page. HTML is heavily used to embed the hyperlink within the web pages. A user can easily navigate within the web pages and between websites as well, which are located on different servers.
<br>
4. Cutting edge feature
HTML5 with its set of standards and API is being used to introduce some of the latest trends in website creation business. Like polyfill libraries, which are supported by old browsers equally well. Browser like Google Chrome is the perfect choice when it comes to implementing an HTML5 latest set of standards and APIs. There is a JavaScript library available called Modernizr, which can detect features that let the developer dynamically load polyfill libraries as required.
<br>
5. Responsive images on web pages
At the elementary level in applications of HTML, queries can be set to utilize the images, which are responsive in nature. With the srcset attribute of img element in HTML, and combining it with picture elements, a developer can fully control how the user will render an image. Now different types of an image with size variation can be loaded by using the img element. Rules can be easily set with the picture element, we can declare img element with default source and then for every case, a source can be provided.
</p>
          </div>
          <div id="cssp">
            
          </div>
          <div id="cssc">
            <h1 id="he1">Uses Of CSS</h1>
            <p id="p1">
              If you’re not using cascading style sheets in your web pages yet shame on you. CSS has excellent support in today’s browsers. It’s relatively easy to learn and produces better and cleaner code than applying all those styles directly to your HTML.


Using CSS modularizes your websites in much the same way that programmers have been modularizing software code for year. Modular code in your website allows for greater design consistency and easier maintenance. CSS is the new standard and has been now for several years. It’s time to separate the structure of HTML and the presentation of CSS.<br><br>

So if we’ve been using HTML for years and creating all sorts of great websites with them why make the switch? Some of the advantages of using CSS are:<br>

1.Easier to maintain and update.<br><br>
2.Greater consistency in design.<br><br>
3.More formatting options.<br><br>
4.Lightweight code.<br><br>
5.Faster download times.<br><br>
6.Search engine optimization benefits.<br><br>
7.Ease of presenting different styles to different viewers.<br><br>
8.Greater accessibility.<br><br>
            </p>
          </div>
          <div id="jsp">
            
          </div>
          <div id="jsc">
            <h1 id="he1">Uses Of Java Script</h1>
            <p id="p1">
            JavaScript is a light-weight object-oriented programming language that is used by several websites for scripting the webpages. It is an interpreted, full-fledged programming language. JavaScript enables dynamic interactivity on websites when it is applied to an HTML document.<br><br>

JavaScript helps the users to build modern web applications to interact directly without reloading the page every time. JavaScript is commonly used to dynamically modify HTML and CSS to update a user interface by the DOM API. It is mainly used in web applications.<br><br>

Let's discuss the uses of JavaScript. Some of the uses of JavaScript are representing in the following image. <br><br></p>
          </div>
          <div id="jp">
            
          </div>
          <div id="jc">
            <h1 id="he1">Uses Of Java</h1>
            <p id="p1">
              Java, not unlike many of the technologies which influence our everyday lives to this very day, originated in California, under the purview of Sun Microsystems, a company founded in 1982 by Andreas Bechtolsheim, Vinod Khosla, and Scott McNeally. With that said, tech-savvy types tend to look more to the future than the past, so if you find yourself more curious about the modern world of coding, or find yourself questioning just how influential Java has been to the world of technology, you don’t particularly want a history lesson. You’re most likely looking for the modern applicability and influence of a technology that has continued to evolve consistently in order to keep up with the times.<br><br>

Java is a programming language, designed to be concurrent, class-based and object-oriented, as well as a computing platform first released by Sun Microsystems in 1995. An enormous amount of applications and websites will not work unless you have Java installed, and more are created every day. Denying yourself Java is akin to denying yourself access to a technological infrastructure. Java is advertised, and esteemed for its fast performance, security, and reliability.<br><br>
            </p>
          </div>
          
        </div>
      </div>
      <!__footer__>
      <div id="footer">
        <div id="abt">
          <h1>ABOUT</h1>
         <p id="ph"><i class="fas fa-user-circle"></i> Developer: Karthik.</p>
         <p id="ph"><i class="fas fa-user-circle"></i> Designer: Karthik.</p>
         <p id="ph"><i class="fab fa-youtube-square"></i> Chennel:ViberTechTamil.</p>
         <p id="ph"><i class="fas fa-envelope-square"></i> Email: karthiksenthilkumar05@gmail.com</p>
          
        </div>
  <div id="sm"><h1 id="c13">follow as</h1>
      <a href="https://youtube.com/c/viberstatus">
      <i class="fab fa-youtube"></i></a>
      <a href="https://www.instagram.com/karthik_sk_fans/">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://mobile.twitter.com/Viberstatus">
        <i class="fab fa-twitter-square"></i>
      </a>
      </div>
      
    </div>
    <marquee>SUBSCRIBE TO YOUR YOUTUBE CHENNAL</marquee>
    <div class="cpy">
      <h1 id="c11" style="text-align: center;"> <i class="far fa-copyright"></i> copyrights@vibertechtamil2020-2025</h1></div>
          
        </div>
      </div>
    </div>
    <div id="off">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wifi-off" viewBox="0 0 16 16">
  <path d="M10.706 3.294A12.546 12.546 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c.63 0 1.249.05 1.852.148l.854-.854zM8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065 8.448 8.448 0 0 1 3.51-1.27L8 6zm2.596 1.404l.785-.785c.63.24 1.228.545 1.785.907a.482.482 0 0 1 .063.745.525.525 0 0 1-.652.065 8.462 8.462 0 0 0-1.98-.932zM8 10l.934-.933a6.454 6.454 0 0 1 2.012.637c.285.145.326.524.1.75l-.015.015a.532.532 0 0 1-.611.09A5.478 5.478 0 0 0 8 10zm4.905-4.905l.747-.747c.59.3 1.153.645 1.685 1.03a.485.485 0 0 1 .048.737.518.518 0 0 1-.668.05 11.496 11.496 0 0 0-1.812-1.07zM9.02 11.78c.238.14.236.464.04.66l-.706.706a.5.5 0 0 1-.708 0l-.707-.707c-.195-.195-.197-.518.04-.66A1.99 1.99 0 0 1 8 11.5c.373 0 .722.102 1.02.28zm4.355-9.905a.53.53 0 1 1 .75.75l-10.75 10.75a.53.53 0 0 1-.75-.75l10.75-10.75z"/>
</svg>
      
      <h2 id=oh>Your are in offline</h2>
      <p id="op"> Please check you internet connection!!!!</p>
    </div>
    
   <!--  <script>
    if(navigator.onLine)
{
swal("your in online", "Learn online", "success");
document.getElementById("off").style.display="none";
document.getElementById("ful").style.display="block";
  
}
else{
  document.getElementById("ful").style.display="none";
document.getElementById("off").style.display="block";

}

window.addEventListener("online", function(){
  swal("your in online", "Learn online", "success");
  document.getElementById("ful").style.display="block";
  document.getElementById("off").style.display="none";
});

window.addEventListener("offline", function(){
document.getElementById("ful").style.display="none";
document.getElementById("off").style.display="block";
});
    </script> -->
  </body>
</html>