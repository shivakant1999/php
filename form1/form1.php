<html>

<style>
h1
{
text-align: center;
}
table{
    border:solid 1px;
    padding:5px;
    BACKGROUND-COLOR: #8FD2EF;
}
td{
    padding:5px;
}
</style>

<head>
<title> Registration From </title>
</head>
<h1>Registration Form </h1>
<form action="" method="POST">
<center>
<table>
<tr>
<td>
Username:
<input type="text" name="username" placeholder="Enter Username">
</td>
</tr>
<tr>
<td>
Password:
<input type="Password" name="password" placeholder="Enter Password">
</td>
</tr>
<tr>
<td>
<input style="margin-left:72px" type="submit" name="submit" value="submit">
<input style="margin-left:20px" type="reset" name="reset" value="reset">
</td>
</tr>
</table>
</center>
</html>
<?php
$con=Mysqli_connect("localhost","root","","test");
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $sql="INSERT into stud(name,password) values ('$name','$pass')";
    if(!mysqli_query($con,$sql))
    {
        echo "Cannot Insert data into table";
    }
    else
        {
            echo "<script>alert('Data Inserted Successfully')</script>";
            
        }
}
?>