
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../styles/formsty.css">
</head>
<body>
<a class="form-to-index" href="../../index.html"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="container">
        <div class="box form-box">

<?php

include("../config.php");

if(isset($_POST['submit'])){
    //form inputs storing into php variables
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    //verifying the unique email
    $verify_query = mysqli_query($conn, "SELECT Email FROM users WHERE Email='$email'");
    // echo $verify_query;

    // The mysqli_num_rows($result) function returns the number of rows in a result set
    if(mysqli_num_rows($verify_query) !=0){ //checks if the emails are avaliable in the database
        echo "<div class= 'message'>
        <p>This email is used</p>
        </div> <br>";
        echo "<a href='javascript:self.histroy.back()'><button class='btn'>Go Back</button>";
    }
    else{
        mysqli_query($conn, "INSERT INTO users(Username,Email,Gender,Age,Password) VALUES('$username','$email','$gender','$age','$password')") or die("Error");
        
        echo "<div class= 's-message'>
        <p>Registration Succesfull</p>
        </div> <br>";
        echo "<a href='login.php'><button class='btn'>Login Now</button>";
   
    }
}
else{
?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Name</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                <label for="email">Gender</label>
                     <select name="gender" id="gender" required>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="other">Other</option>
                     </select>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>

