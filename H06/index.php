<?php

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;port=3308;dbname=school", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die("error prepare atmt ");
$stmt->execute() or die("error execute stmt ");

echo "<table>";

while($array = $stmt->fetch()){
    echo "<tr>";
    echo "<td>" . $array['cursistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb_datum'] . "</td>";
    echo "<tr>";
}

echo "</table>";

echo "<a href=\"http://just-in.eu5.org/PHP/index.html\">back</a>";
echo "<a href='page2.php'>page 2</a>";