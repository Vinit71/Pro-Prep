<?php 
   session_start();

   include("../../config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../../../styles/payment.css">
</head>
<body>

<?php 
            
			$id = $_SESSION['id'];
			$query = mysqli_query($conn,"SELECT*FROM users WHERE Id=$id");

			while($result = mysqli_fetch_assoc($query)){
				$res_id = $result['Id'];
				$res_Uname = $result['Username'];
				$res_Email = $result['Email'];
				$res_Gender = $result['Gender'];
				$res_Age = $result['Age'];
			}

			var_dump($_POST['plan_id']); //output: valid, after click: NULL
			var_dump($_POST['done']);	//output: valid, after click: NULL

			$plan_id = $_POST['plan_id'];
			if (isset($_POST['paid'])) {
				
				$sql = "INSERT INTO yoga_coach (Id, Username, Email, Gender, Age, Plan)
				VALUES ('$res_id', '$res_Uname', '$res_Email', '$res_Gender', '$res_Age', '$plan_id')";

				if ($conn->query($sql) === TRUE) {
					echo "Data copied successfully.";
					// header("Location: payment.html");
				} 
				else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		?>

	<div class="container">
		<div class="left">
			<p>Payment methods</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="methods">
				<div onclick="doFun()" id="tColorA" style="color: green;"><i class="fa-solid fa-credit-card" style="color: green;"></i> Payment by card</div>
				<div onclick="doFunA()" id="tColorB"><i class="fa-solid fa-building-columns"></i> Internet banks</div>
				<div onclick="doFunB()" id="tColorC"><i class="fa-solid fa-wallet"></i> Apple/Google pay</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
		</div>
		<div class="center">
			<a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
			<hr style="border:1px solid #ccc; margin: 0 15px;">

			<div class="card-details">
				<form method="post">
					<p>Card number</p>
					<div class="c-number" id="c-number">
						<input id="number" class="cc-number" placeholder="Card number" maxlength="19" required>
						<i class="fa-solid fa-credit-card" style="margin: 0;"></i>
					</div>

					<div class="c-details">
						<div>
							<p>Expiry date</p>
							<input id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5" required>
						</div>
						<div>
							<p>CVV</p>
							<div class="cvv-box" id="cvv-box">
								<input id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3" required>
								<i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
							</div>
						</div>
					</div>
					<div class="email">
						<p>Email</p>
						<input type="email" placeholder="example@email.com" id="email" required>
					</div>
					<!-- <button>PAY NOW</button> -->

                        <input type="submit" name="paid" value="Buy">
				</form>
			</div>
		</div>

		<div class="right">
			<p>Order information</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="details">
				<div style="font-weight: bold; padding: 3px 0;">Order discription</div>
				<div style="padding: 3px 0;">Test payment</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto" /></a>
		</div>
		
	</div>

	<script src="payment.js"></script>
</body>
</html>