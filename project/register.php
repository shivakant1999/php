<?php
include('database.php');
session_start();

if(isset($_POST['submit']))
{
	$email=$_POST['email'];    
  $name=$_POST['name'];
	$pass=$_POST['password'];
  $rs=mysqli_query($con,"INSERT INTO voter VALUES ('$name','$email','$pass')");
  if($rs)
  {
  echo "<script>alert('registration succesfull !')</script>";
  }
  else
  {
    echo " Registraion Failed.";
  }
}

?>

<html>
<head>
<link href="style.css?ver=1.7" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head><body bgcolor="tan">

<div><h2 class="barone">PDM Online Voting System</h2></div>

<h1 class="text"><u><strong> Registration Form </strong></u></h1>
<p align="center">&nbsp;</p>
</div>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<form action=""  method="POST"  >
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="tan">
<tr>
<td width="78">Name</td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" id="name" required></td>
</tr>
<tr>
<td width="78">Username/Email</td>
<td width="6">:</td>
<td width="294"><input name="email" type="text" id="myusername" required></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input style="margin-top:20px" name="password" type="password" id="mypassword" required>
<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("mypassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Register"></td>
</tr>
</form>
</tr>
</table>
<center>
<p class="z">Already have an account?<a href="index.php"> login Here!</a> </p>
</center>
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
</html>
