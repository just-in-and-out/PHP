<?php
session_start();
echo $_SESSION['naam']."<br>";
echo $_SESSION['email']."<br>";
echo "role = ".$_SESSION['rol'];
?>

<!DOCTYPE html>
<html>
<header>
    <title>h07.1 homepage</title>
</header>
<body>
<form method="post">
    <input type="submit" name="administrator" value="Administrator only">
    <p></p>
    <?php
    if (isset($_POST['administrator'])) {
        if ($_SESSION['rol'] == "Administrator") {
            header("location: administrator.php");
        } elseif ($_SESSION['rol'] == "User") {
            echo "you are not an administrator";
        } else{
            header("location: index.php");
        }
    }
    ?>
</form>
<p></p>
<form method="post">
    <input type="submit" name="logout" value="logout">
    <?php
    if (isset($_POST['logout'])){
        session_abort();
        header("location: index.php");
    }
    ?>
</form>

</body>
</html>