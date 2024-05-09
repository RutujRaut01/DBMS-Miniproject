<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YourAI Website</title>
<style>
   body {
       font-family: Arial, sans-serif;
       margin: 0;
       padding: 0;
   }
   header {
       background-color: #333;
       color: #fff;
       text-align: center;
       padding: 20px 0;
   }
   header h1 {
       margin: 0;
       font-size: 24px;
   }
   nav {
       text-align: center;
       margin-top: 20px;
   }
   nav a {
       display: block;
       padding: 15px 30px;
       color: #fff;
       text-decoration: none;
       background-color: #9370DB;
       border-radius: 10px;
       margin-bottom: 20px;
       transition: background-color 0.3s ease;
   }
   nav a:hover {
       background-color: #7b68ee;
   }
   footer {
       background-color: #333;
       color: #fff;
       text-align: center;
       padding: 10px 0;
       position: fixed;
       bottom: 0;
       width: 100%;
   }
   img{
    height: 150px;
    width: 150px;
    border: 2px solid rgb(214, 195, 255);
    margin: 10px 10px;
   }
   a{
    color: white;
   }
</style>
</head>
<body>

<header>
   <a href="./homepage.php"><h1>YourAI</h1></a>
   <img src="./assets/logo.png" alt="YourAI">
</header>

<nav>
   <a href="./sourcefile/login.php">Login</a>
   <a href="./sourcefile/promptgenerator.php">Prompt Generator</a>
   <a href="./sourcefile/prompthistory.php">Prompt History</a>
</nav>

<footer>
   <a href="./sourcefile/contact.html"><p class="links">Contact Me</p></a>
   <a href="./sourcefile/about.html"><p class="links">About</p></a>
</footer>

</body>
</html>
