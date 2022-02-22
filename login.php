    
<?php>
    include_once "header.php";
?>
<section class="signup-form">
    <h2>Log in</h2>
    <form action="login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email..">
        <input type="text" name="password" placeholder="password..">
        <button type="submit" name="submit">Log in</button>
    </form>
</section>
<?php>
    include_once "footer.php";
?>