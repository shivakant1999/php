<html>
    <link rel="stylesheet" href="style1.css">
<?php
$link=mysqli_connect("localhost","root","","Demo");
if($link==false)
{
    die ("ERROR: cannot connect to database".mysqli_connect_error());
}
if(isset($_POST["delete"]))
{
$roll=$_POST['Roll_no'];
$sql="DELETE from student where Roll_no=$roll";

if(mysqli_query($link,$sql))
{
    echo "<h1>Row deleted succesfully</h1>";
}
else
{
    echo "ERROR: Cannot execute".mysqli_error($link);
}
Mysqli_close($link);
}
?>
</html>