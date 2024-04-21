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
      </head>
      <style>
        /* Logo font */
@import "https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap";

:root {
  /* dark theme */
  --dark-theme: #121212;
    --dark-theme-col2: #1a1a1a;

  --dark-blue: #00246B;
  --lighter-blue: #003A85;

  --lighter-blue-1: #4663a8;
  --lighter-blue-2: #4d6cb2;
  --lighter-blue-3: #325dab;
  --lighter-blue-4: #3a63b5;
  --lighter-blue-5: #5173b9;
  --lighter-blue-6: #587cbf;

  --white: #FFFFFF;
  --dark-black: #000000;
}

.navbar {
  position: absolute;
    top: 0rem;
    left: 0;
    width: 100%;
  display: grid;
  grid-template-columns: auto 1fr auto; /* Three columns: 1st for logo, 2nd for links, 3rd for profile */
  align-items: center; /* Center items vertically */
  justify-content: space-between; /* Space items evenly along the main axis */
  color: white;
  font-size: 25px;
  background-color: #f5f5f5;
}

.logo {
        /* color: var(--dark-blue); */
        color: black;
        font-weight: 500;
        font-size: 1.6rem;
        justify-self: start; 
        padding-top: 2;
        padding-left: 1.5rem;

        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-style: normal;

        word-spacing: 0.2em;
      }

      .links {
        display: flex;
        justify-content: center; /* Center items horizontally */
      }

      .links a {
        font-size: 35px;
        letter-spacing: 2px;
        text-decoration: none;
        color: black;
        margin: 0 2rem; /* Add spacing between links */
      }

      .profile-img {
        justify-self: end;
        margin-right: 0.7rem;
        border: 2px solid green;
        border-radius: 50%;
        width: 2.8rem;
        height: 2.8rem; 
    }

     .nav-links:hover {
        color: red;
     }

     /* .profile:hover {
      border-bottom: 2px solid blue;
     } */

     .profile-img:hover {
      border: 2px solid blue;
     }


     .menu-toggle {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding: 10px;
      cursor: pointer;
  }
  
  .menu {
    z-index: 3;
      display: none;
      position: absolute;
      background-color: white;
      top: 50px;
      margin-right: 0.5rem;
      right: 0;
      padding: 5px;
  }
  
  .menu.show {
      display: block;
  }
  
  .menu a {
      color: black;
      font-size: 15px;
      text-decoration: none;
      display: block;
      padding: 5px;
  }


/* ----Client Container---- */

.client-container {
  display: flex;
  justify-content: center;
  text-align: center;
  background-color: whitesmoke;
  border: 2px solid var(--lighter-blue-4);
  border-radius: 20px;
  position: absolute;
  /* top: 10rem; */
  top: 53%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 80%;
  width: 96%;
}


.table {
  table-layout: fixed;
  border-collapse: collapse;
  width: 1500;
  margin-left: 1%;
  margin-top: 1%;
  
}

    table, th, td {
      border: 1px solid black;
    }

    th{
      letter-spacing: 2px;
      font-weight: 100;
      font-size: 20px;
      background-color: var(--lighter-blue);
      color: var(--white);
      padding: 10px;
    }

    td {
      /* background-color: var(--lighter-blue-6); */
      /* background-color: lightblue; */
      font-size: larger;
      padding: 0.7rem 2.5rem 0.7rem 2.5rem;
    }


/* Dark mode  */

body {
  transition: background-color 0.4s, color 0.4s;
}

.dark-mode .navbar {
  background-color: var(--dark-theme);
    color: var(--white);
}
.dark-mode .logo {
  color: var(--white);
}
.dark-mode .links a {
  background-color: var(--dark-theme);
    color: var(--white); /* White text color for links in dark mode */
}
.dark-mode .client-container {
  background-color: var(--dark-theme-col2);
}
.dark-mode td {
  color: white;
}

.dark-mode {
  background-color: var(--dark-theme);
  color: #fff;
}

.dark-mode-toggle {
  position: fixed;
  /* top: 20px; */
  right: 10rem;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
      </style>
    <body>
    <div class="navbar">
          <div class="logo">ProPrep</div>

          <div class="links">
              <!-- <a class="nav-links" href="#">Home</a>
              <a class="nav-links" href="#">Contact</a>
              <a class="nav-links" href="#">About</a> -->
              <a href="#">Admin Dashboard</a>
          </div>

          <div class="dark-mode-toggle">
  <label class="switch">
    <input type="checkbox" id="darkModeToggle">
    <span class="slider"></span>
  </label>
</div>

          <div class="profile menu-toggle" onclick="toggleMenu()">
            <img class="profile-img" src="../../img/836.jpg" alt="">
            <div class="menu" id="menu">
              <a href="#">Profile</a>
              <a href="../../index.html"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
          </div> 
    </div>
    

      <?php
      // Check if the connection was successful
      if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch data from the table
      $query = mysqli_query($conn, "SELECT * FROM coaches_applications");

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
            <th>Password</th>
            <th>Phone</th>
            <th>Service_offered</th>
            <th>Experience</th>
            <th>Additional_note</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Gender'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Password'] . "</td>";
            echo "<td>" . $row['Phone'] . "</td>";
            echo "<td>" . $row['Service_offered'] . "</td>";
            echo "<td>" . $row['Experience'] . "</td>";
            echo "<td>" . $row['Additional_note'] . "</td>";
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


<script src="../coach/coaches.js"></script>
</body>

</html>