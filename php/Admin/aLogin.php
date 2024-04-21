<?php
    session_start();
?>

<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../../styles/formsty.css">
        <title>Admin-Login</title>
    </head>
<body>
<a class="form-to-index" href="../../index.html"><i class="fa-solid fa-arrow-left"></i></a>
<div class="container">
        <div class="box form-box">

                        <!-- php -->
                        <?php 
             
             include("../config.php");
             if(isset($_POST['submit'])){
               $email = mysqli_real_escape_string($conn,$_POST['email']);
               $password = mysqli_real_escape_string($conn,$_POST['password']);

               $result = mysqli_query($conn,"SELECT * FROM admin_info WHERE Email='$email' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['id'] = $row['Id'];
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['admin_name'] = $row['Admin_name'];
                //    $_SESSION['age'] = $row['Age'];
               }else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='aLogin.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header("Location: aIndex.php");
               }
             }else{

                ?>

            <header>Admin Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <!-- <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div> -->
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>