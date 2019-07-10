<?php
session_start();
require('database.php');
//If your session isn't valid, it returns you to the login screen for protection
//if(empty($_SESSION['admin_id'])){
 //header("location:access-denied.php");
//}
//retrive positions from the tbpositions table
$result=mysqli_query($con, "SELECT * FROM position");
if (mysqli_num_rows($result)<1){
    $result = null;
}
?>
<?php
// inserting sql query
if (isset($_POST['Submit']))
{

$newPosition = addslashes( $_POST['position'] ); //prevents types of SQL injection

$sql = mysqli_query($con, "INSERT INTO position (position) VALUES ('$newPosition')");

// redirect back to positions
 header("Location: positions.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($con, "DELETE FROM position WHERE position_id='$id'");
 
 // redirect back to positions
 header("Location: positions.php");
 }
 else
 // do nothing
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manage Positions</title>
<link href="style.css?ver=1.6" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<body >
<div><h2 class="barone">PDM Online Voting System</h2></div> 
  <h3><center><u>MANAGE POSITIONS</u></h3>
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
<table class="t" width="380" align="center">
<CAPTION><h3>ADD NEW POSITION</h3></CAPTION>
<form name="fmPositions" id="fmPositions" action="positions.php" method="post" onsubmit="return positionValidate(this)">
<tr>
    <td>Position Name</td>
    <td><input type="text" name="position" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table class="b" border="0" width="420" align="center">
<CAPTION><h3>AVAILABLE POSITIONS</h3></CAPTION>
<tr>
<th>Position ID</th>
<th>Position Name</th>
</tr>

<?php
//loop through all table rows
$inc=1;
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" .$inc."</td>";
echo "<td>" . $row['position']."</td>";
echo '<td><a href="positions.php?id=' . $row['position_id'] . '">Delete Position</a></td>';
echo "</tr>";
$inc++;
}

mysqli_free_result($result);
mysqli_close($con);
?>
</table>
<hr>
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