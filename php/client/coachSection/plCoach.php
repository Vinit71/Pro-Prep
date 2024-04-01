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
    $sql = "INSERT INTO powerlifting_coach (Id, Username, Email, Gender, Age, Plan)
            VALUES ('$res_id', '$res_Uname', '$res_Email', '$res_Gender', '$res_Age', '$plan_id')";

    if ($conn->query($sql) === TRUE) {
        // echo "Data copied successfully.";
        // header("Location: payment.html");
    } else {
        echo "record already exists";
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<html>
<head>
    <title>PL-Coach</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../../../styles/priceCards.css">
    
</head>
<body>
<div class="serviceName">PL Coach</div>

<div class="pricing">
    <div class="plan">
        <h2>Newbie</h2>
        <div class="price">₹2k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-times-circle"></i> ...</li>
        </ul>
        <form method="post">
            <input type="hidden" name="plan_id" value="2K">
            <input type="submit" name="done" value="done" class="button-like-form">
        </form>
    </div>

    <div class="plan popular">
        <span>Most Popular</span>
        <h2>Elite</h2>
        <div class="price">₹5k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i clas s="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
        </ul>
        <form method="post">
            <input type="hidden" name="plan_id" value="5K">
            <input type="submit" name="done" value="done" class="button-like-form">
        </form>
    </div>

    <div class="plan">
        <h2>Champion</h2>
        <div class="price">₹12k/month</div>
        <ul class="features">
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
            <li><i class="fas fa-check-circle"></i> ...</li>
        </ul>
        <form method="post">
            <input type="hidden" name="plan_id" value="12K">
            <input type="submit" name="done" value="done" class="button-like-form">
        </form>
    </div>
</div>


<script src="coachSection.js"></script>
</body>
</html>
