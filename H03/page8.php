<?php
$kappersagenda = [
    "9:15" => "Mevr. pietersen",
    "9:30" => "Mevr. Willems",
    "9:45" => "",
    "10:00" => "paul van den broek",
    "10:15" => "karel de meeuw",
    "10:30" =>""
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>H03.8</title>
</head>

<?php
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
?>
<body>
<a href="index.php">page 1</a>
<a href="page7.php">page 7</a>
<a href="http://just-in.eu5.org/PHP/index.html">back</a>
</body>
</html>
