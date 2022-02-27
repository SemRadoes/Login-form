<?php
    session_start();
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>login form</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">about us</a></li>
                <li><a href="blog.php">find blogs</a></li>
                <?php
                    if(issee($_SESSION["useruid"])){
                        echo "<li><a href="profile.php">sign up</a></li>";
                        echo "<li><a href="includes/logout.inc.php">log in</a></li>";
                    } else {
                        echo "<li><a href="signup.php">sign up</a></li>";
                        echo "<li><a href="login.php">log in</a></li>";
                    }
                ?>
                
            </ul>
        </div>
    </nav>
    
    <div class="wrapper">
