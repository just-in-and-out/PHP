<?php

?>

<!DOCTYPE html>
<html>
<head>
<title>H03.3</title>
<style>
    body{
        text-align: center;
    }
</style>
</head>
<body>
<?php
for ($i = 0; $i <= 9; $i++){
    echo "/";
    for ($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "*\<br>";
}
?>
<p></p>
<a href="index.php">page 1</a>
<a href="page2.php">page 2</a>
<a href="page4.php">page 4</a>
</body>
</html>
