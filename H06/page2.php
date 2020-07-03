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
$query = "SELECT * FROM accounts;";
$stmt = $conn->prepare($query) or die("error prepare atmt ");
$stmt->execute() or die("error execute stmt ");

$Email = "";
$Password = "";
$message = "";
$AEI = "";
$API = "";


function login($Email, $Password, $AEI, $API){

    for($i = 0; $i < 3; $i++){
        if ($Email === $AEI && $Password === $API){
            echo "welkom";
            exit();
        }else{
            $message = "sorry, geen toegang";
        }
    }
    echo $message;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>H06.2</title>
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
    <a href="page5.php">page 5</a>
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

        $AEI = $array['email'];
        $API = $array['password'];
        if ($Email === $AEI && $Password === $API){
            echo "welkom";
            exit();
        }else{
            $message = "sorry, geen toegang";
        }

    }
    echo $message;
    ?>
</form>

</body>
</html>