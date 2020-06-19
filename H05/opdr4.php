<?php
if (empty($_GET)){
    echo "something wnt wrong. make sure you check at least one box";
}

foreach ($_GET['animals'] as $animal)
    echo "<img src = 'img/{$animal}.jpg'>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>H05.4</title>
</head>
<body>
<?php
?>
<a href="page4.php">page 4</a>
<a href="page5.php">page 5</a>
</body>
</html>