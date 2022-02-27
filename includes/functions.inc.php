<?php

function emptyInputSignup($name, $email, $username, $password, $passwordrepeat){
    $result;
    if((empty($name) || (empty($email) || (empty($username) || (empty($password) || (empty($passwordrepeat)){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function passwordMatch($password, $passwordrepeat){
    $result;
    if($password !== $passwordrepeat){
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function userIdexists($connection, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $statement = mysqli_statement_init($connection);
    if(mysqli_statement_prepare($statement, $sql)){
        header("location: ../signup.php?error=statementfailed");
        exit();
    }

    mysqli_statement_bind_parameter($statement, "ss", $username, $email);
    mysqli_statement_execute($statement);

    $resulData = mysqli_statement_get_result($statement);

    if($row = mysqli_fetch_assoc($resulData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_statement_close($statement);
}

function userIdexists($connection, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $statement = mysqli_statement_init($connection);
    if(mysqli_statement_prepare($statement, $sql)){
        header("location: ../signup.php?error=statementfailed");
        exit();
    }

    mysqli_statement_bind_parameter($statement, "ss", $username, $email);
    mysqli_statement_execute($statement);

    $resulData = mysqli_statement_get_result($statement);

    if($row = mysqli_fetch_assoc($resulData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_statement_close($statement);
}

function createUser($connection, $name, $email, $username, $password){
    $sql = "INSERT INTO users (userName, usersEmail, usersUid, userPassword) VALUES(?, ?, ?, ?);";
    $statement = mysqli_statement_init($connection);
    if(mysqli_statement_prepare($statement, $sql)){
        header("location: ../signup.php?error=statementfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT)

    mysqli_statement_bind_parameter($statement, "ssss", $name, $email, $username, $hashedPassword);
    mysqli_statement_execute($statement);
    mysqli_statement_close($statement);
    header("location: ../signup.php?error=none");
    exit();
}
