<?php
 session_start();
session_destroy();
session_unset();
?>

<html><head>
<link href="style.css?ver=1.3" rel="stylesheet" type="text/css" />
<title>Logged out</title>
</head>
<body bgcolor="tan">
<div><h2 class="barone">PDM Online Voting System</h2></div> 
<div id="page">
<div id="header">
<h3 class="t"><center>Logged Out Successfully </h3>
<p align="center">&nbsp;</p>
</div>

<p class="text">You have been successfully logged out of your control panel.</p><br><br><br>
<p class="tex" >Return to <a href="index.php">Login</a></p>
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
