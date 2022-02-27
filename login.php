    
<?php>
    include_once "header.php";
?>
<section class="signup-form">
    <h2>Log in</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="userid" placeholder="Username/Email..">
        <input type="text" name="password" placeholder="password..">
        <button type="submit" name="submit">Log in</button>
    </form>
</section>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"] === "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        } else if($_GET["error"] === "wronglogin"){
            echo "<p>Incorrect login!</p>";
        }
    }
?>
<?php>
    include_once "footer.php";
?>