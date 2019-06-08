<?php
$conn = mysql_connect("localhost","root","") or die("not connected to db");
mysql_select_db("project",$conn);
?>
<html>
    <style>
        table
        { 
            text-align: center;
            width:auto;
            margin-top: 270px;
            margin-left: 150px;
            padding-right: 100px;
            padding-left: 100px;
            border: 2px solid black;
            border-collapse: collapse;
            border-style:solid;
            background-color: #E0FE9B;
        }
        th
        {
            padding-right: 100px;
            padding-left: 100px;
            border: 2px solid black;
            border-collapse: collapse;
            background-color: bisque
        }
        td
        {
            border : 1px solid black;
            padding-left: 10px;
        }
        body{
            background-color: #DFF1F6;
        }
    
    </style>
    <body>
        <table style="border: 1px solid black">
            <tr> 
            
                <th>Name</th>
                <th>Email</th>
                <th>PASSWORD</th>
                <th>Phone No.</th>

            </tr>
            <?php 
            $sql=mysql_query("select * from register where Name like '%ant' ");
            while($row=mysql_fetch_array($sql))
            {
            ?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td><?php echo $row['Phone No.']; ?></td>
                </tr>
            <?php                
            }
            ?>
        </table>
    </body>
</html>