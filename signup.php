    
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
    if(isset($_GET[])){

    }
?>
<?php
    include_once "footer.php";
?>