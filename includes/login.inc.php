<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["userId"];
    $password = $_POST["password"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputLogin($username, $password) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    
    loginUser($connection, $username, $password);

    
} else {
    header("location: ../login.php");
    exit();
}
?>