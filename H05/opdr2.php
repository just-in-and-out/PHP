<?php

echo "Name: ";
if (isset($_POST['Name']) && !empty($_POST['Name'])){
    echo $_POST['Name'] . "<br>";
} else{
    echo "is not specified<br>";
}
echo "Email: ";
if (isset($_POST['Email']) && !empty($_POST['Email'])){
    echo $_POST['Email'] . "<br>";
} else{
    echo "is not specified<br>";
}
echo "Password: ";
if (isset($_POST['Password']) && !empty($_POST['Password'])){
    echo $_POST['Password'] . "<br>";
} else{
    echo "is not specified<br>";
}