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
<a href="page3.php">.   page 3</a>
<a href="index.php">page 1   .</a>
</body>
</html>
<?php

function divisible_by_3($i){

    return $i % 3 === 0;

}

for ($x = - 9; $x < 50; $x++){
    $devisible = divisible_by_3($x)? "" : "NOT ";
    echo "{$x} is {$devisible}divisible by 3<br>";
}