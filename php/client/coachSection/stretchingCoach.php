<?php
session_start();
include("../../config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

if (isset($_POST['done'])) {
    $id = $_SESSION['id'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE Id=$id");

    while ($result = mysqli_fetch_assoc($query)) {
        $res_id = $result['Id'];
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_Gender = $result['Gender'];
        $res_Age = $result['Age'];
    }

    $plan_id = $_POST['plan_id'];
    $sql = "INSERT INTO stretching_coach (Id, Username, Email, Gender, Age, Plan)
            VALUES ('$res_id', '$res_Uname', '$res_Email', '$res_Gender', '$res_Age', '$plan_id')";

if ($conn->query($sql) === TRUE) {
  echo "Data copied successfully.";
  // header("Location: payment.html");
  header("Location: ./formSubmission/success.php");
} else {
  echo "record already exists";
  // echo "Error: " . $sql . "<br>" . $conn->error;
  header("Location: ./formSubmission/failed.php");
}
}
?>

<html>
<head>
    <title>Stretching-Coach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../../../styles/priceCar.css">
    <!-- <link rel="stylesheet" href="../../../styles/clientWebstyle.css"> -->

    <style>
        
.circle-loader {
  margin-bottom: 3.5em;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-left-color: #5cb85c;
  animation: loader-spin 1.2s infinite linear;
  position: relative;
  display: inline-block;
  vertical-align: top;
  border-radius: 50%;
  width: 7em;
  height: 7em;
}

.load-complete {
  -webkit-animation: none;
  animation: none;
  border-color: #5cb85c;
  transition: border 500ms ease-out;
}

.checkmark {
  display: none;
}

.checkmark:after {
  opacity: 1;
  height: 3.5em;
  width: 1.75em;
  border-right: 3px solid #5cb85c;
  border-bottom: 3px solid #5cb85c;
  content: '';
  left: 2.6em;
  top: 1.2em;
  position: absolute;
  transform: rotate(45deg);
}

/* Loader keyframe */
@keyframes loader-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Checkmark keyframe */
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 1.75em;
    opacity: 1;
  }
  40% {
    height: 3.5em;
    width: 1.75em;
    opacity: 1;
  }
  100% {
    height: 3.5em;
    width: 1.75em;
    opacity: 1;
  }
}
.features li {
  padding-top: 15px;
}

.button-like-form {

}
    </style>
</head>
<body>
<!-- <div class="serviceName">Yoga Coach</div> -->

<!-- Cards Section -->
<div class="pricing">
    <div class="plan">
        <h2>Newbie</h2>
        <div class="price">₹2k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> Access to Weekly Group Yoga Classes</li>
            <li><i class="fas fa-check-circle"></i> Monthly Progress Tracking</li>
            <li><i class="fas fa-check-circle"></i> Yoga Pose Library Access</li>
            <li><i class="fas fa-check-circle"></i> Monthly Newsletter</li>
            <li><i class="fas fa-times-circle"></i> Discount on Private Sessions</li>
        </ul>
        <form id="pricingForm" method="post">
            <input type="hidden" name="plan_id" value="2K">
            <input type="submit" name="done" value="Buy" class="button-like-form">
        </form>
    </div>

    <div class="plan popular">
        <span>Most Popular</span>
        <h2>Elite</h2>
        <div class="price">₹5k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> Access to Bi-Weekly Group Yoga Classes</li>
            <li><i class="fas fa-check-circle"></i> Monthly One-on-One Session</li>
            <li><i class="fas fa-check-circle"></i> Access to Live Workshops</li>
            <li><i class="fas fa-check-circle"></i> Personalized Yoga Routine</li>
            <li><i class="fas fa-check-circle"></i> Priority Email Support</li>
        </ul>
        <form method="post">
            <input type="hidden" name="plan_id" value="5K">
            <input type="submit" name="done" value="Buy" class="button-like-form">
        </form>
    </div>

    <div class="plan">
        <h2>Champion</h2>
        <div class="price">₹12k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> Unlimited Group Yoga Classes</li>
            <li><i class="fas fa-check-circle"></i> Bi-Weekly One-on-One Sessions</li>
            <li><i class="fas fa-check-circle"></i> Access to Exclusive Events</li>
            <li><i class="fas fa-check-circle"></i> Customized Diet Plan</li>
            <li><i class="fas fa-check-circle"></i> 24/7 Priority Support</li>
        </ul>
        <form method="post">
            <input type="hidden" name="plan_id" value="12K">
            <input type="submit" name="done" value="Buy" class="button-like-form">
        </form>
    </div>
</div>


<!-- <div id="loaderContainer">
  <div class="tickMark"></div>
</div> -->

<!-- <script src="coachSectio.js"></script> -->
</body>
</html>
