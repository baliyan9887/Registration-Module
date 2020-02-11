<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<style type="text/css">
		body{
			font-size: 1.0rem;
			font-family: "Hind", sans-serif;
			color: #25283D;
			background-color: #ECF0F1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;

		}
	</style>
</head>
<body>
	<h1 style="text-align: center; margin-top: 130px;">Please enter your new password </h1>
	
		<!-- Create a form for update the password in databse using HTML and CSS. -->
	
		<form class="forgot" method="post" class="form">
			 <input type="text" name="username" required autofocus placeholder="Enter your usernme" style="  width: 40%;
    margin-left: 400px;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;"><br><br>
           <input type="password" name="password_1" required autofocus placeholder="Enter youe new password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/specialcharacter uppercase and lowercase letter, and at least 8 or more character " style="  width: 40%;
    margin-left: 400px;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;"><br><br>
    <input type="password" name="password_2" required autofocus placeholder="Confirm your password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/specialcharacter uppercase and lowercase letter, and at least 8 or more character " style="  width: 40%;
    margin-left: 400px;
    margin-bottom: 20px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    height: 35px;
    color: #000;
    font-size: 16px;
    transition: 1s all;">
    <button name="next" style="font-size: 16px;
	  width: 163px;
	  height: 48px;
	  cursor: pointer;
	  letter-spacing: 1px;
	  margin-top: 40px;
	  margin-left: 600px;
	  border: none;
	  border-radius: 23px;
	  background: #1c8adb; 
	  color: #fff;">Next</button>
	 <p style="text-align: center; margin-top: 50px; margin-right: 40px;">&copy 2019, secureparking pvt. Ltd.</p>
</body>
</html>
<?php
		// Connect to the database
	 $db = mysqli_connect('localhost', 'root', '', 'registration');
	  if(!$db){
	   die("connection failed : " .mysqli_connect_error());
      }
		//echo "Connected successfully !!";
		
	 if (isset($_POST['next'])) {
	 	$username = $_POST['username'];
	 	$new_password = $_POST['password_1'];
	 	$confirm_password = $_POST['password_2'];
	 	
	 	if ($new_password != $confirm_password) {
	 		echo "<script> alert ('password is not matched !!');</script>";
	 	}
	 	$new_password = md5($new_password);
		
		// update query

	 	$update_password = mysqli_query($db, "UPDATE user SET password='$new_password' WHERE username='$username'"); 
	 	
	 	if (mysqli_num_rows($update_password) == 0) {

	 		$_SESSION['username'] = $username;

	 		echo  "<script>alert('Update Sucessfully'); window.location='login.php'</script>";
	 		
	 	}
	 	else 
	 	{
	 		echo "<script>alert('Your new and Retype Password is not match'); window.location='update_password.php'</script>";
	 	
	 	}

	 }
?>