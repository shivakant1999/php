<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
function add($a,$b)
{
    $sum=$a+$b;
    echo "<h3>Addition is: $sum</h3>";
}
function sub($a,$b)
{
    $sub=$a-$b;
    echo "<h3>substraction is: $sub</h3>";
}
function mul($a,$b)
{
    $multiply=$a*$b;
    echo "<h3>Multiplication is: $multiply</h3>";
}
function div($a,$b)
{
    $division=$a/$b;
    echo "<h3>Division is: $division</h3>";
}
if(isset($_POST['add']))
{
    add($_POST['first'],$_POST['second']);
}
if(isset($_POST['sub']))
{
    sub($_POST['first'],$_POST['second']);
}
if(isset($_POST['mul']))
{
    mul($_POST['first'],$_POST['second']);
}
if(isset($_POST['div']))
{
    div($_POST['first'],$_POST['second']);
}
?>
</html>
