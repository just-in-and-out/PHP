<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();

try {
    $conn = new PDO("mysql:host=$servername;port=3308;dbname=school", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM account_specific;";
$stmt = $conn->prepare($query) or die("error prepare atmt ");
$stmt->execute() or die("error execute stmt ");

$Email = "";
$Password = "";
$message = "";
$AEI = "";
$API = "";

?>
<!DOCTYPE html>
<html>
<head>
    <title>H07.1</title>
</head>
<body>
<form method="post">
    <label for="Email">Email</label>
    <input id="Email" type="email" name="Email" required>
    <p></p>
    <label for="Password">Password</label>
    <input id="Password" type="password" name="Password" required>
    <p></p>
    <input type="submit">
    <p></p>
    <a href="http://just-in.eu5.org/PHP/index.html">back</a>
    <p></p>
    <?php
    if (!empty($_POST['Email']) && !empty($_POST['Password'])){
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
    } else{
        exit();
    }
    while($array = $stmt->fetch()) {
        if ($Email === $array['email']&& $Password === $array['password']){
            echo "welkom <br>";
            $_SESSION['email'] = $Email;
            $_SESSION['password'] = $Password;
            $_SESSION['naam'] = $array['name'];
            if ($array['rol'] == "G"){
                $_SESSION['rol'] = "User";
            }
            elseif ($array['rol'] == "A"){
                $_SESSION['rol'] = "Administrator";
            }
            header("Location: homepage.php", true, 301);
            echo $_SESSION['rol'];
            exit();
        }else{
            $message = "sorry, geen toegang";
        }

    }
    echo $message;
    echo $_SESSION['email'];
    ?>
</form>

</body>
</html>