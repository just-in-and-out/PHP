<?php

$zwemclubs = [

    "De Spartelkuikens" => 25,
    "De Waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje"=> 23
];

echo '<table>';

foreach ($zwemclubs as $clubname => $members) {

    echo '<tr>';
    echo '<td>'. $clubname .'</td>';
    echo '<td>'. $members .'</td>';
    $picturecount = floor($members / 5);
    echo '<td class="borderless">';
    for ($i = 0; $i < $picturecount; $i++){
       echo '<img src="//unsplash.it/25" alt="zwemmer">';
    }
    echo '</td>';
    echo '</tr>';

}

echo '</table>';

?>

<!DOCTYPE html>
<html>
<head>
    <title>H03.7</title>
    <style>
        td,tr{
            border: black solid 1px;
            border-collapse: collapse;
        }
        td.borderless{
            border: none;
        }
        img{
            margin: 2px;
        }
    </style>
</head>
<body>
<a href="index.php">page 1</a>
<a href="page6.php">page 6</a>
<a href="page8.php">page 8</a>
</body>
</html>