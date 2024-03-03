<?php 
   session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="../styles/formstyle.css">
    <title>Login</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

<?php 
             
             include("config.php");
             if(isset($_POST['submit'])){
               $email = mysqli_real_escape_string($conn,$_POST['email']);
               $password = mysqli_real_escape_string($conn,$_POST['password']);

               $result = mysqli_query($conn,"SELECT * FROM coaches WHERE Email='$email' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row)){
                   $_SESSION['ok'] = $row['Email'];
                   $_SESSION['username'] = $row['Username'];
                   $_SESSION['age'] = $row['Age'];
                   $_SESSION['id'] = $row['Id'];
               }
               else{
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='cLogin.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['ok'])){
                   header("Location: cIndex.php");
               }
             }else{

           
           ?>

            <header>Coach Login</header>
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
                <div class="links">
                    New here? <a href="cApply.php">Apply Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>