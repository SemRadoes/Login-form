    
<?php
    include_once "header.php";
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="full name..">
        <input type="text" name="email" placeholder="email..">
        <input type="text" name="userId" placeholder="userId..">
        <input type="text" name="password" placeholder="password..">
        <input type="text" name="passwordrepeat" placeholder="repeat password..">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

<?php
    if(isset($_GET["error"])){
        if($_GET["error"] === "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        } else if($_GET["error"] === "invaliduid"){
            echo "<p>Choose a proper username!</p>";
        } else if($_GET["error"] === "invalidemail"){
            echo "<p>Choose a proper email!</p>";
        } else if($_GET["error"] === "passwordsdontmatch"){
            echo "<p>Passwords don't match!</p>";
        } else if($_GET["error"] === "statementfailed"){
            echo "<p>Something went wrong, try again!</p>";
        } else if($_GET["error"] === "usernametaken"){
            echo "<p>Username already taken!</p>";
        } else if($_GET["error"] === "none"){
            echo "<p>You have signed up!</p>";
        }
    }
?>
<?php
    include_once "footer.php";
?>