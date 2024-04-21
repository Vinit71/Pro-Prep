<?php 
   session_start();

   include("../config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: aLogin.php");
   }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../styles/coaches_index.css">
      </head>
      <style>
        .links a {
            color: black;
        }
      </style>
    <body>
    <div class="navbar">
          <div class="logo"><b>Dashboard</b></div>

          <div class="links">
          <a class="nav-links" href="#">Home</a>
              <a class="nav-links" href="#">Contact</a>
              <a class="nav-links" href="#">About</a>
          </div>

          <div class="dark-mode-toggle">
  <label class="switch">
    <input type="checkbox" id="darkModeToggle">
    <span class="slider"></span>
  </label>
</div>

          <div class="profile menu-toggle" onclick="toggleMenu()">
            <img class="profile-img" src="../../../img/836.jpg" alt="">
            <div class="menu" id="menu">
              <a href="#">Profile</a>
              <a href="../../../index.html"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
    </div>
    



<script src="../coaches.js"></script>
</body>

</html>