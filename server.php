
<?php

 	session_start(); // Start the session

	$username = "";
	$email = "";
	$errors = array();

	//connect to the database
   $db = mysqli_connect('localhost', 'root', '', 'registration');
   if(!$db){
	   echo "connection failed : " .mysqli_connect_error();
   }
   // echo " <script> alert('connected successfully !!') </script> ";

   //if the register button is clicked
   if (isset($_POST['reg'])) {
	   
	   // fetch the inputs from the sign-up form
	   
   	    $username = ($_POST['username']);
   	   $email = ($_POST['email']);
        $password_1 = ($_POST['password_1']);
        $password_2 = ($_POST['password_2']);
        $gender = ($_POST['gender']);
        $question = ($_POST['question']);
        $answer =($_POST['answer']);

        //ensure that form fields are filled properly
        if (empty($username)) {
        	array_push($errors, "Username is required");  //add error to array
        }
        if (empty($email)) {
        	array_push($errors, "Email is required");  //add error to array
        }
        if (empty($password_1)) {
        	array_push($errors, "Password is required");  //add error to array
        }

        if ($password_1 != $password_2) {
        	array_push($errors, "The Passwords do not match");
        }

        //if there are no errors, save user to database
          if (count($errors) == 0)  {
        	$password = md5($password_1); //encrypt password before storing in database (security)
        	$sql = "INSERT INTO user (username, email, password, gender, question, answer) VALUES ('$username','$email','$password', '$gender', '$question', '$answer')";
        	mysqli_query($db, $sql);
        	$_SESSION['username'] = $username; //Store the username in Session variable that's helps us to check user is logged in or logged out .
          $_SESSION['question'] = $question;
        	//$_SESSION['success'] = "You are now logged in";
        	header('location: dashboard.php'); // redirect to homepage       
        }

   }

   			//Login
   if (isset($_POST['login'])) {
			// fetch the inputs from the login form
   	   $username = ($_POST['username']);
       $password = ($_POST['password']);

        //ensure that form fields are filled properly
        if (empty($username)) {
        	array_push($errors, "Username is required");  //add error to array
        }
        if (empty($password)) {
        	array_push($errors, "Password is required");  //add error to array
        }
        if (count($errors) == 0) {
        	$password = md5($password); //encrypt password before comparing with that from database
        	$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        	$result = mysqli_query($db, $query);
        	if (mysqli_num_rows($result) == 1 ) {
        		//log user in
        		$_SESSION['username'] = $username;
        	    //$_SESSION['success'] = "You are now logged in";
        	    header('location: dashboard.php'); // redirect to homepage
        		
        	}else{
        		array_push($errors, "wrong username/password combination");
        		
        	}
        }
   }

   	//logout
   if (isset($_GET['logout'])) {
   	   session_destroy();
   	   unset($_SESSION['username']);
   	   header('location: login.php');
   }


?>