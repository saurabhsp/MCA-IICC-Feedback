<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include "db.php";
	$empid = $_POST["empid"];
	$first_name = $_POST["first_name"];
	$surname = $_POST["surname"];
	$dob = $_POST["dob"];
	$phone = $_POST["phone"];
	$adress = $_POST["adress"];
	$role = $_POST["role"];
	$salary = $_POST["salary"];

	$sql = "INSERT INTO `iicc_feedback` (`empid`, `first_name`, `surname`, `dob`, `phone`, `adress`, `role`, `salary`) VALUES ('$empid', '$first_name', '$surname', '$dob', '$phone', '$adress', '$role', '$salary');";
	$result=mysqli_query($conn,$sql);


	if($result){
		echo "Data Submitted Successfully";
	}
	else{
		echo "try again";
	}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>RTMNU चे पोट्टे </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="shortcut icon" href="images/icons8-favorite-96.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">


</head>

<body>
	<aside>
		<h4>घे गाण आयक तो पर्यन्त </h4>
		<audio controls src="song.mp3.mp3">
		</audio>
	</aside>
	<h1> <b>कशे आहे बे mca चे पोट्टे हो </b> </h1>
	<h3> बरोबर फॉर्म भरा बे पोट्टे हो
	</h3>
	<div class="form-box">
		<div class="textup">
			<b style="color: rgb(1, 2, 2);">फक्त दोन मिनीट त लागते बे फॉर्म भराले !! </b>
		</div>
		<br>
		<form action="index.php" method="post">
			<label for="uname">
				<i class="fa-solid fa-user-tie"></i>
				Emp Id टाक बे इथ शेमण्या <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="text" id="uname" name="empid" required>
			<label for="uname">
				<i class="fa fa-solid fa-user"></i>
				तूय पहिल नाव टाक बे<i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="text" id="uname" name="first_name" required>
			<label for="uname">
				<i class="fa fa-solid fa-user"></i>
				तूय आडनाव टाक बे <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="text" id="uname" name="surname" required>
			<label>
				<i class="fa-solid fa-cake-candles"></i>
				Birthday टाक तुया- अबे झालता केव्हा तू ते टाक <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="date" id="date" name="dob" required>

			<label for="number">
				<i class="fa-solid fa-phone"></i>
				नंबर टाक बे ! तुयाच टाकजो फक्त <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="tel" id="phone" name="phone" required>
			<label for="uname">
				<i class="fa-solid fa-location-dot"></i>
				राहत कुठ ते टाक आता <i class="fa-solid fa-arrow-down"></i>
			</label>
			<textarea type="text" id="uname" name="adress" required></textarea>
			<label for="uname">
				<i class="fa-solid fa-user-tie"></i>
				Role टाक बरोबर म्हणजे fontend आहे backend आहे <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="text" id="uname" name="role" required>
			<label for="uname">
				<i class="fa-solid fa-indian-rupee-sign"></i>
				पगार टाक इथ -साल्या खरी खरी टाकजो <i class="fa-solid fa-arrow-down"></i>
			</label>
			<input type="number" id="uname" name="salary" requred>
	</div>
	<button type="submit" onclick="myFunction()">
		Submit
	</button>
	</form>
	</div>
	<br>
	<h2 style="font-family: 'Times New Roman', Times, serif; text-decoration: underline;"><b>This Form designed by Saurabh Pakhale (MCA-IICC)</b></h2>
	<br><br>
	<script>
		function myFunction() {
			alert("झाला बे फॉर्म सबमिट निघ आता माया वेबसाईट वरून  !");
		}
	</script>
	<script src="https://kit.fontawesome.com/5c236e97eb.js" crossorigin="anonymous"></script>

</body>

</html>