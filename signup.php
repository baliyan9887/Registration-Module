
<!--  include server.php is use to insert the data into database. --> 
<?php include('server.php'); ?> <!-- !Important -->

<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<link rel="stylesheet" type="text/CSS" href="./css/style.CSS">
</head>
<body>
	

    <form method="post" action="signup.php">
    	
    	<!-- display validation error here --> 
    	<?php include('errors.php');?>
    	
         <div class="sign-up">
        
         <img src="./img/avatar.png" class="avatar">
        <h1>Sign up</h1>
            
			<!-- Create a Sign-up form using HTML. You can use your HTML code according to requirement. -->  
			
			<form>
            <p>Username</p>
            <input type="text" name="username" value="<?php echo $username ?>" required autofocus placeholder="Enter Username" pattern="[a-zA-Z0]{6,}" title="Please enter a valid username">
            <p>Email ID</p>
            <input type="text" name="email" value="<?php echo $email ?>" required autofocus placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter a valid Id">
            <p>Password</p>
            <input type="password" name="password_1" required autofocus placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/specialcharacter uppercase and lowercase letter, and at least 8 or more character ">
            <p>Confirm Password</p>
            <input type="password" name="password_2" required autofocus placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z)(?=.*[a-z]).*$" title="Must contain at least one number/specialcharacter uppercase and lowercase letter, and at least 8 or more character ">
            <select name="gender" class="gender" style="width: 30%;height: 40px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    font-style: bold;
                                    outline: none;" required>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <br>
            <br>
            <h7 style = "color: #1c8adb;"> * If you forget your password, we will identify you with this information</h7>
            <br>
            <br>
            <select name="question" class="question" style="width: 70%;height: 40px;
                                     padding-right: 40px;
                                     padding-left: 16px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    font-size: 16px;
                                    font-style: bold;
                                    outline: none;" required>
                <option value="">--Select your Security Question--</option>
                <option value="What is your pet name?">What is your pet name?</option>
                <option value="What was the name of your first school?">What was the name of your first school?</option>
                <option value="Who was your Childhood hero?">Who was your Childhood hero?</option>
                <option value="What is your favorite past time?">What is your favorite past time?</option>
                <option value="What is your all time favorite sports team?">What is your all time favorite sports team?</option>
                <option value="What is your father's middle name?">What is your father's middle name?</option>
                <option value="What make was your first car or bike?">What make was your first car or bike?</option>
                <option value="Where did you first meet your spouse?">Where did you first meet your spouse?</option>
            </select>
                <br><br>
            <input type="text" name="answer" placeholder="Enter your answer">
            <br><br><label>
                <input type="checkbox" name="term" checked="checked">I agree with <a href="#">terms & conditions</a>
            </label>
            <br><br><label>
                <input type="checkbox" name="remember" checked="checked">Remember me
            </label>
         <div class="input-group">
            <button type="submit" name="reg" class="btn">Sign up</button>
         </div>
         <p class="message">
            Already a member? <a href="login.php">Sign in</a>
         </p>
        </form>
    </div>

    </form>

    
</body>
</html>