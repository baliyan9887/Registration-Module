<!DOCTYPE html>
<html>
<head>
	<title>forget</title>
	<link rel="stylesheet" type="text/css" href="./css/forgot.css">

</head>
<body>
	<div class="form">
	<!-- Create a form to check user is in our database or not . -->
	<form action="forgot.php" method="post" autocomplete="on">
	<h1>Password Recovery</h1>
	<p >You can use this form to recover your password if you have forgotten it. Because your password is securely encrypted in our database, it is impossible actually recover your password, but we will enable you to reset it securely. Enter either your username or your email address below to get strated.   </p>
		<h2 style="margin-top: 50px; margin-left: 20px;">Please enter your username</h2>
	<input type="text" name="username" placeholder="Enter your username">
    <br><br><h3 style="margin-left: 40%;">OR</h3>
    <input type="text" name="email" placeholder="Enter your Email">
    <br><br>

	<a href="#">Back</a>

	<button type="submit" name="submit" class="btn" >Next</button>
</form>
</div>
	<p>&copy 2019, secureparking pvt. Ltd.</p>


</body>
</html>
<?php
	
	// Connect to the database
		
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	 if(!$db){
	   die("connection failed : " .mysqli_connect_error());
     }
	  // echo "Connected successfully !!";
	   
	$username = isset($_POST['username'])?$_POST['username']:'';
	$email = isset($_POST['email'])?$_POST['email']:'';

	
	session_start(); //start the session
	if(isset($_POST['username'])){
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			$_SESSION['username'] = $username;
			header('location: check-question.php');
		} if (isset($_POST['email'])) {
		$mysql_get_users = mysqli_query($db, "SELECT * FROM user WHERE email = '$email'");
		$get_rows =mysqli_affected_rows($db);
		if ($get_rows >= 1) {
			$_SESSION['email'] = $email;
			header('location: check-question.php');
		} else {
			echo "<h2>";
			echo "The username or email you entered was not found in our database";
			echo "<h2>";
		}
	 }
	}
	

 ?>
