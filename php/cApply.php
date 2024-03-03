
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../styles/form-style.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">

<?php

include("config.php");

if(isset($_POST['submit'])){
    //form inputs storing into php variables
    $coachName = $_POST['coachname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $service_offered = $_POST['service_offered'];
    $experience = $_POST['experience'];
    $additional_note = $_POST['additional_note'];

    //verifying the unique email
    $verify_query = mysqli_query($conn, "SELECT Email FROM coaches WHERE Email='$email'");
    // echo $verify_query;

    // The mysqli_num_rows($result) function returns the number of rows in a result set
    if(mysqli_num_rows($verify_query) !=0){ //checks if the emails are avaliable in the database
        echo "<div class= 'message'>
        <p>This email is used</p>
        </div> <br>";
        echo "<a href='javascript:self.histroy.back()'><button class='btn'>Go Back</button>";
    }
    else{
        mysqli_query($conn, "INSERT INTO coaches(CoachName,Age,Gender,Email,Password,Phone,Service_offered,Experience,Additional_note) VALUES('$coachName','$age','$gender','$email','$password','$phone','$service_offered','$experience','$additional_note')") or die("Error");
        
        echo "<div class= 'message'>
        <p>Application recieved</p>
        </div> <br>";
        echo "<a href='cLogin.php'><button class='btn'>Login Now</button>";
   
    }
}
else{
?>

            <header>Sign Up</header>
            <!-- 1 -->
            <form action="" method="post">
                <div class="field input">
                    <label for="coachname">Name</label>
                    <input type="text" name="coachname" id="coachname" autocomplete="off" required>
                </div>

                <!-- 2 -->
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <!-- 3 -->
                <div class="field input">
                <label for="email">Gender</label>
                     <select name="gender" id="gender" required>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="other">Other</option>
                     </select>
                </div>

                <!-- 4 -->
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <!-- 5 -->
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <!-- 6 -->
                <div class="field input">
                    <label for="phone">Phone No.</label>
                    <input type="number" name="phone" id="phone" autocomplete="off" required>
                </div>

                <!-- 7 -->
                <div class="field input">
                    <label for="service_offered">Service</label>
                    <input type="text" name="service_offered" id="service_offered" autocomplete="off" required>
                </div>

                <!-- 8 -->
                <div class="field input">
                    <label for="experience">Experience</label>
                    <input type="text" name="experience" id="experience" autocomplete="off" required>
                </div>

                <!-- 9 -->
                <div class="field input">
                    <label for="additional_note">Note</label>
                    <input type="text" name="additional_note" id="additional_note" autocomplete="off">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a coach? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>

