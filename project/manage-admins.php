<?php
session_start();
require('database.php');
?>
<html><head>
<link href="style.css?ver=1.9" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<body >     

<div><h2 class="barone">PDM Online Voting System</h2></div> 
<h3><center><u>Manage Admin's</u> </h3>
<div> <div><ul class="menusubnav">        
 <li class="orange">
 	<a href="home.html">Dashboard</a>
 </li>         
 <li>
 	<a href="Positions.html">Manage Positions </a>
 </li>
 <li>
	<a href="candidate.html">Manage Candidates</a>
</li> 
 <li>
 	<a href="Result.html">Result</a>
 </li>         
 <li>
 	<a href="details.html">Admin Details</a>
 </li>         
 <li>
	<a href="changepassword.html">Change Password</a>
</li>
 <li>
 	<a href="logout.php">Log out</a>
 </li>     
</ul>
</div> 
</div> 
<?php
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}

//fetch data for update file
$result=mysqli_query($con, "SELECT * FROM tbadministrators WHERE admin_id = '$_SESSION[admin_id]'");
if (mysqli_num_rows($result)<1){
    $result = null;
}
$row = mysqli_fetch_array($result);
if($row)
 {
 // get data from db
 $adminId = $row['admin_id'];
 $firstName = $row['first_name'];
 $lastName = $row['last_name'];
 $email = $row['email'];
 }

//Process
if (isset($_GET['id']) && isset($_POST['update']))
{
$myId = addslashes( $_GET['id']);
$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];

$sql = mysqli_query($con, "UPDATE tbAdministrators SET first_name='$myFirstName', last_name='$myLastName', email='$myEmail' WHERE admin_id = '$myId'" );
}
?>
<table align="center">
<tr>
<td>
<form action="manage-admins.php?id=<?php echo $_SESSION['admin_id']; ?>" method="post" onSubmit="return updateProfile(this)">
<table class="table1"align="center">
<CAPTION><h4>UPDATE ACCOUNT</h4></CAPTION>
<tr><td>First Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="firstname" maxlength="15" value="<?php echo $firstName ?>"></td></tr>
<tr><td>Last Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="lastname" maxlength="15" value="<?php echo $lastName ?>"></td></tr>
<tr><td>Email Address:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="email" maxlength="100" value="<?php echo $email?>"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" value="Update Account"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>

 <div id="footer" style="top: 265.193">
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