<!doctype html>
<html>
    <body>
        <?php
        function hello($name,$age)
        {
            echo "<center> hello $name, you are $age years old";
        }
        hello("shiva",21);
        function cube($n)
        {
            return $n*$n*$n;
        }
        echo "<br>cube of 3 is".cube(3);
        ?>
    </body>
</html>
