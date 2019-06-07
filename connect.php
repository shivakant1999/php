<!doctype html>
<html>
<body>
    <link rel="stylesheet" href="style.css">
<?php
$a=125;
switch($a)
{
    case 12:
    echo "<h1>value is 12</h1>";
    break;
    case 125:
    echo "<h1>value is 125</h1>";
    break;
    case 123:
    echo "<h1>value is 123</h1>";
    break;
    case 10:
    echo "<h1>value is 10</h1>";
    break;
    default:
    echo "<h1> enter a valid choice</h1>";
}
?>
</body>
</html>