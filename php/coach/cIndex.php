<?php 
   session_start();

   include("../config.php");
   if(!isset($_SESSION['ok'])){
    header("Location: cLogin.php");
   }
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../styles/cindex.css">
      </head>
      <style>
        .links a {
            color: black;
        }
      </style>
    <body>
<?php


// Check if the connection was successful
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the table
$query = mysqli_query($conn, "SELECT * FROM coaches");

if (!$query) {
  die("Query failed: " . mysqli_error($conn));
}

// Print the data in a table
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($query)) {
  echo "<tr>";
  echo "<td>ID: " . $row['ID'] . "</td>";
  echo "<td>Coach Name: " . $row['CoachName'] . "</td>";
  echo "<td>Age: " . $row['Age'] . "</td>";
  echo "<td>Gender: " . $row['Gender'] . "</td>";
  echo "<td>Email: " . $row['Email'] . "</td>";
  echo "<td>Password: " . $row['Password'] . "</td>";
  echo "<td>Phone: " . $row['Phone'] . "</td>";
  echo "<td>Service Offered: " . $row['Sevice_offered'] . "</td>";
  echo "<td>Experience: " . $row['Experience'] . "</td>";
  echo "<td>Additional Note: " . $row['Additional_note'] . "</td>";
  echo "</tr>";
}
echo "</table>";

// Close the connection
mysqli_close($conn);
?>


        
        <div class="navbar">
          <div class="logo"><b>Logo</b></div>

          <div class="links">
          <a class="nav-links" href="#">Home</a>
              <a class="nav-links" href="#">Clients</a>
              <a class="nav-links" href="#">Queries</a>
          </div>

          <h2></h2>

          <div class="profile menu-toggle" onclick="toggleMenu()">
            <img class="profile-img" src="../../img/836.jpg" alt="">
            <div class="menu" id="menu">
              <a href="#">Profile</a>
              <a href="./cLogout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
        </div>

        <div class="client-container">
          <p>a</p>
          <p>b</p>
          <p>c</p>
        </div>

    <script src="coaches.js"></script>
    </body>
</html>