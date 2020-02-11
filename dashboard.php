<?php include('server.php');
        //if user not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
  ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User-Dashboard</title>
  <link rel="stylesheet" href="./css/dash.css">
</head>
<body>
  <nav class="navbar">
    

    <ul class="navbar-nav">
      <li><span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
         <p style="font-size: 50px; margin-top: -0px; margin-right: -130px;" >&#9787</p>
          <h6>Hi,  <?php
              $username =  $_SESSION['username']; 
            echo  ucwords($username) ?></h6>
      </a>
    </span></li> 
      
    </ul>
  </nav>

	<!-- create menu bar for user -->
	
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">Activity</a>
    <a href="login.php?logout='1'">Logout</a>
    
  </div>
 
<!-- Script for sliding menu -->
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
  
    }

  </script>

<div class="content">
        <?php if (isset($_SESSION["username"])): ?>

            <div class="user">
            Welcome to Secureparking
            <br>
            <p><?php
              $username =  $_SESSION['username']; 
            echo  ucwords($username) ?></p>
           </div>
           <div class="logout">
            <a href="#" style="vertical-align: middle;" >Book now</a>
          </div>
        <?php endif ?>
        

    </div>

</body>
</html>
