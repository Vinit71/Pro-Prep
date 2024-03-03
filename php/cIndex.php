<?php 
   session_start();

   include("config.php");
   if(!isset($_SESSION['ok'])){
    header("Location: cLogin.php");
   }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../styles/webstyle.css">
      </head>
      <style>
        .links a {
            color: black;
        }
      </style>
    <body>
        
        <div class="navbar">
          <div class="logo"><b>Logo</b></div>

          <div class="links">
          <a class="nav-links" href="#">Home</a>
              <a class="nav-links" href="#">Clients</a>
              <a class="nav-links" href="#">Queries</a>
          </div>

          <div class="profile menu-toggle" onclick="toggleMenu()">
            <img class="profile-img" src="../img/836.jpg" alt="">
            <div class="menu" id="menu">
              <a href="#">Profile</a>
              <a href="./cLogout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
        </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            menu.classList.toggle("show");
        }
    </script>
    </body>
</html>