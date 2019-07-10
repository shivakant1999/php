<?php
session_start();
?>
<html><head>
<link rel="stylesheet" type="text/css" href="style.css?ver=1.3">
</head><body >  
<div><h2 class="barone">PDM Voting System</h2></div>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
You have been successfully logged out.<br><br><br>
Return to <a href="../index.php">Login</a>
<center><div style="margin-top: 340px; font-size: 17px;">&copy; 2019 Online Polling System. All Rights Reserved</div></center>
</div>
</body></html>