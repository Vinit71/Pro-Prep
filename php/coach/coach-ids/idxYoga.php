<?php 
   session_start();

   include("../../config.php");
   if(!isset($_SESSION['ok'])){
    header("Location: cLogin.php");
   }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../../styles/coaches_idx.css">
      </head>
      <style>
        .links a {
            color: black;
        }
      </style>
    <body>
    <div class="navbar">
          <div class="logo"><b>YOGA</b></div>

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
              <a href="../cLogout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
    </div>
    
<?php
// Check if the connection was successful
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the table
$query = mysqli_query($conn, "SELECT * FROM yoga_coach");

if (!$query) {
  die("Query failed: " . mysqli_error($conn));
}
?>

<div class="client-container">
<div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Plan</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Plan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
  </div>
</div>

<?php
// Close the PHP tags
mysqli_close($conn);
?>



<script src="../coaches.js"></script>
</body>

</html>