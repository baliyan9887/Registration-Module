<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
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
	<h1 style="text-align: center; margin-top: 130px;">Please select your security question </h1>
		
		<!-- Create a form for check_question using HTML and CSS -->
		
		<form class="forgot" method="post">
		 <select name="question" class="question" style="width: 40%;height: 40px;
                                     padding-right: 10px;
                                     padding-left: 16px;
                                     margin-left: 400px;
                                     margin-top: 40px;
                                    color: rgba(46, 46, 46, .8);
                                    border: 1px solid rgb(225, 225, 225);
                                    border-radius: 4px;
                                    text-align: center;
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
       
           <input type="text" name="answer" required="on" placeholder="Enter your answer" style="  width: 40%;
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
            <br><br>
            <a href="forget.php" style="text-decoration: none; margin-left: 400px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px;">Back</a>
           <button name="next" style="text-decoration: none; margin-left: 450px; background: #1c8adb; font-size: 17px; color: #fff; text-align: center; padding: 13px 13px; border-radius: 8px;">Next</button>
	</form>
  <p style="text-align: center; margin-top: 50px;">&copy 2019, secureparking pvt. Ltd.</p>
</body>
</html>

<?php
      session_start(); //start the session
	  
	  //Connect to the database
	  
      $db = mysqli_connect('localhost', 'root', '', 'registration');
	   if(!$db){
	   die("connection failed : " .mysqli_connect_error());
	   }
			//echo "Connected successfully !!!";
			
			
      if (isset($_POST['next'])) {
		  //fetch the inputs from the form
      	$answer = $_POST['answer'];
        $question = $_POST['question'];
        $username = $_SESSION['username'];
      	$mysql_get_users_question = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' ");
       
		// fetch the rows form the database
	   
	   while($rows = mysqli_fetch_array($mysql_get_users_question)){
        $ans = $rows['answer']; //fetch the answer row
        $ques = $rows['question'];  //fetch the question row

       if (mysqli_num_rows($mysql_get_users_question) == 1) {
            $_SESSION['username'] = $username; //fetch the username form session
            $_SESSION["ques"] = $rows['question'];
            $_SESSION["ans"] = $rows['answer'];


            if($ques == $question && $ans == $answer){
            header('location: update_password.php');
          }
         else
          {
            echo("<script> alert('You entered the wrong information !!') </script>");
          }

    } 
      }

	}
?>




















