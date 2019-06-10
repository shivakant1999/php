<html>
    <link rel="stylesheet" href="style.css">
<?php
$link = mysqli_connect("localhost", "root", "", "demo");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Student_Name = mysqli_real_escape_string($link, $_REQUEST['Student_Name']);
$Roll_no = mysqli_real_escape_string($link, $_REQUEST['Roll_no']);
$class = mysqli_real_escape_string($link, $_REQUEST['class']);
 

$sql = "INSERT INTO student(Student_Name,Roll_no,class) VALUES ('$Student_Name', '$Roll_no', '$class')";
if(mysqli_query($link, $sql)){
    echo "<h3>Records added successfully.<h3>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
</html>