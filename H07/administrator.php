<?php
session_start();

echo "welcome to the administrator only page<br>";
echo $_SESSION['naam']."<br>";
echo $_SESSION['email']."<br>";
echo "role = ".$_SESSION['rol'];
?>

<!DOCTYPE html>
<html>
<header>
    <title>h07.1 administrator</title>
</header>
<body>
<a href="homepage.php">homepage</a>
</body>
</html>