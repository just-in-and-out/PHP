<!DOCTYPE html>
<html>
<head>
    <title>H04.1</title>
    <style>
        a{
            float: right;
        }
    </style>
</head>
<body>
<a href="page2.php">.   page 2</a>
<a href="http://just-in.eu5.org/PHP/index.html">back   .</a>
</body>
</html>

<?php

function Celsius_to_Farhenheit ($Celsius){
    $Fahrenheit = $Celsius * 1.8 + 32;
    echo $Celsius . " degrees celsius is equal to " . $Fahrenheit . " degrees Fahrenheit<br>";
}

for ($i = -40; $i <= 100; $i++){
    Celsius_to_Farhenheit($i);
}
?>