
<!-- To check user is valid or not. -->
<?php include('server.php'); ?> <!-- !Important --> 
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/CSS" href="./css/style.CSS">
</head>
<body>
	
    <form method="post" action="login.php" autocomplete="on">
        <!-- display validation error here --> 
        
        <?php include('errors.php'); ?>
		
		<!-- Create a login form using HTML and CSS. -->
		
    	<div class="login-box">
         <img src="./img/avatar.png" class="user">
          <h2>Sign in</h2>
            <form> 
            <p>Username</p>
            <input type="text" name="username" required autofocus placeholder="Enter Username" pattern="[a-zA-Z0]{6,}" title="Please enter in more than six letters" >
            <p>Password</p>
            <input type="password" name="password" required autofocus placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/
            specialcharacter uppercase and lowercase letter, and at least 8 or more character ">  
            <label>
        <input type="checkbox" checked="checked" name="remeber"> Remember me
    </label>

            <button type="submit" name="login" class="btn">Login</button>
            <h5>
                Forgot <a href="forgot.php">password?</a>
            </h5>
    	 <h6>
    	 	Not yet a member? <a href="signup.php">Sign up</a>
    	 </h6>
        </form>
    </div>

    </form>
</body>
</html>