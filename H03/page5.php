<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>H03.5</title>
    <style>
        body{
            text-align: center;
        }
        .red{
            border: red solid 5px;
        }
        .green{
            border: lawngreen solid 5px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <= 9; $i++){
    if ($i % 2 == 0){
        $class = "class='red'";
    }
    else{
        $class = "class='green'";
    }
    echo "<img ".$class." src='img/image".$i.".jpg'>";
}
?>
<p></p>
<a href="index.php">page 1</a>
<a href="page4.php">page 4</a>
<a href="page6.php">page 6</a>
</body>
</html>