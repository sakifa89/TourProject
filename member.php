<?php
    session_start();
 if($_SESSION['username'])
  echo "Welcome, ".$_SESSION['username']."!!!! <br><a href='index.html'>Click Here to go Home page</a><br>If you want to logout then click<a href='logout.php'>logout</a> ";
  else
  die("You must be logged in!");
  
      ?>


<!DOCTYPE html>
<html>
<p>
<head>
	
	<link rel="stylesheet" type="text/css" href="member.css">
</head>
<body>
<div class="fix content">
    
   
	</div>

</body>
</html>