<?php

$ages = array(2,10,12,65);

foreach ($ages as $age){
    $cost = 10;
    if ($age < 3){
        $cost = $cost * 0;
    }
    elseif ($age > 65){
        $cost = $cost * 0.5;
    }
    elseif ($age <= 12){
        $cost = $cost * 0.5;
    }
    echo "for person with age ".$age." the price is ".$cost."<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>H03.6</title>
</head>
<body>
<a href="index.php">page 1</a>
<a href="page5.php">page 5</a>
<a href="page7.php">page 7</a>
</body>
</html>
