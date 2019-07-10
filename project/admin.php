<?php
session_start();
require('database.php');
if(! $_SESSION["name"])
{

	header("location:index.php");
}
//If your session isn't valid, it returns you to the login screen for protection
/*if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}*/
?>
<html><head>
<link href="style.css?ver=1.9" rel="stylesheet" type="text/css" />
</head>
<body>
<div><h2 class="barone">PDM Online Voting System</h2></div> 
<div><h2 class="barone"><?php echo" Welcome ".$_SESSION["name"]; ?></h2></div> 
<h3><center><u>Administration Control Panel </u></h3>
<div> <div><ul class="menusubnav">        
 <li class="orange">
 	<a href="home.html">Dashboard</a>
 </li>         
 <li>
 	<a href="Positions.php">Manage Positions </a>
 </li>
 <li>
	<a href="candidate.html">Manage Candidates</a>
</li> 
 <li>
 	<a href="Result.html">Result</a>
 </li>         
 <li>
 	<a href="manage-admins.php">Admin Details</a>
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

<p align="center">&nbsp;</p>
<div id="container">

<p class="x"><strong><--</strong>Click a links to perform an administrative operation.</p>


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
<div class="imag"></div></html>