<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["userId"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["passwordrepeat"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    if (emptyInputSignup($name, $email, $username, $password, $passwordrepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (passwordMatch($password, $passwordrepeat) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (userIdexists($connection, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($connection, $name, $email, $username, $password);
} else {
    header("location: ../signup.php");
    exit();
}