<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Polling System Access Denied</title>
<link href="style.css?ver=1.6" rel="stylesheet" type="text/css" />
</head>
<body>
<div><h2 class="barone">PDM Online Voting System</h2></div>
<body>
<h2 class="text">Invalid Credentials Provided </h2>
<p align="center">&nbsp;</p>
</div>
<div id="container">
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

ob_start();
session_start();
require('database.php');

$tbl_name="admin"; // Table name


// Defining your login details into variables
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$encrypted_mypassword=$mypassword; //MD5 Hash for security

// MySQL injection protections
$myusername = stripslashes($myusername);
$mypassword = stripslashes($encrypted_mypassword);

//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);

//echo $mypassword." ".$myusername;

$sql=mysqli_query($con, "SELECT * FROM admin WHERE email='$myusername' and password='$mypassword'");
$sql1=mysqli_query($con, "SELECT * FROM voter WHERE email='$myusername' and password='$mypassword'");
// Checking table row
$count = mysqli_num_rows($sql);
$count1=mysqli_num_rows($sql1);
// If username and password is a match, the count will be 1
if($count>1)
{
// If everything checks out, you will now be forwarded to admin.php

  $user=mysqli_fetch_assoc($sql); 
  $_SESSION['admin_id'] = $user['admin_id'];
  header("location:admin.php");

//If the username or password is wrong, you will receive this message below.
}
else{
$user=mysqli_fetch_assoc($sql1); 
  $_SESSION['admin_id'] = $user['admin_id'];
  header("location:voter/home.html");

}
// else {
//   echo "<p class='text'>Wrong Username or Password<br><br>Return to <a href=\"index.php\">login</a></p>";
//   }
  
ob_end_flush();
?> 
</div>
<div id="footer">
	<div class="bottom_addr">&copy; 2019 PDM Voting System. All Rights Reserved.
	</div>
	<div class="bottom_addr">Made with &hearts; at
		<span class="pseudolink" onclick="location='https://www.pdm.ac.in'">PDM University.
	    </span>
	</div>
 </div>
</div>
</body>
<div class="imag"></div>
</html>