<?php

$trees = array("oak_tree","birch_tree","spruce_tree","jungle_tree","acacia_tree");

?>

<!DOCTYPE html>
<html>
<head>
<title>H03.2</title>
</head>
<body>
<?php
foreach ($trees as $tree){
    echo "<img src='img/".$tree.".jpg'>";
}
?>
<p></p>
<a href="index.php">page 1</a>
<a href="page3.php">page 3</a>
</body>
</html>
