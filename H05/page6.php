<?php
$Email = "";
$Password = "";
$accounts = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201");
$message = "";
function login($Email, $Password, $accounts){

    foreach ($accounts as $AE => $AP){
        if ($Email === $AE && $Password === $AP){
            echo "welkom";
            $correct = true;
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
    <title>H05.6</title>
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
    login($Email,$Password,$accounts)
    ?>
</form>

</body>
</html>