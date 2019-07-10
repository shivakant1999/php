<?php
include('database.php');
session_start();
if(isset($_POST["submit"])){


	$email=$_POST["email"];
	$pass=$_POST["password"];
	$rs=mysqli_query($con,"select * from admin where email='$email' && password='$pass'");
	$ts=mysqli_num_rows($rs);
	if($ts!=0){
		$_SESSION["name "]=$email;

		header("location:admin.php");


	}
else {
	$rs1=mysqli_query($con,"select * from voter where email='$email' && password='$pass'");
	$ts1=mysqli_num_rows($rs1);
	if ($ts1!=0) {
		$_SESSION["name"]=$email;
		header("location:voter/home.html");
	}
	else {
		header("location:access-denied.php");
	}
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

<h1 class="text"><u><strong> Login Form </strong></u></h1>
<p align="center">&nbsp;</p>
</div>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<form action=""  method="POST"  >
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="tan">
<tr>
<td width="78">Username/Email</td>
<td width="6">:</td>
<td width="294"><input name="email" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input style="margin-top:20px" name="password" type="password" id="mypassword">
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
<td><input type="submit" name="submit" value="Login"></td>
</tr>
</form>
</tr>
</table>
<center>
<p class="z">Don't have an account?<a href="register.php"> Register Here!</a> </p>
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
