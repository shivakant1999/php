<html>
<style>
    table 
        {
            border-collapse:separate;
            border:solid black 1px;
            text-align:center;
            border-radius:6px;
            -moz-border-radius:6px;
            margin-top:200px;
            margin-left:500px;
            background-color: bisque;
        }
        body{
            background-color:skyblue;
        }
        td, th 
        {
            border-left:solid black 1px;
            border-top:solid black 1px;
            padding:5px;
        }
        th 
        {
            background-color: Yellow;
            border-top: none;
        }

        td:first-child, th:first-child 
        {
            border-left: none;
        }
        body{
       background-color:#66ff66;
        }
</style>

<?php
$link=mysqli_connect("localhost","root","","Demo");
if($link==false)
{
    die ("ERROR: cannot connect to database".mysqli_connect_error());
}
$sql="select * from student";

if($result=mysqli_query($link,$sql))
{
    if(mysqli_num_rows($result)>0)

    {
        echo"<table>";
        echo "<tr>";
         echo "<th>First_Name</th>";
         echo "<th> Roll_Number </th>";
         echo "<th>Class</th>";
         echo "<tr>";
         while($row=mysqli_fetch_array($result))
         {
             echo "<tr>";
             echo "<td>".$row['Student_Name']."</td>";
             echo "<td>".$row['Roll_no']."</td>";
             echo "<td>".$row['class']."</td>";
             echo "</tr>";
         }
       echo"</table>";
    }
    else{
        echo "No results found matching your query";
    }
}
else
{
    echo "ERROR: Cannot execute".mysqli_error($link);
}
Mysqli_close($link);
?>
</html>