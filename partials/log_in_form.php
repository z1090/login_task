<?php 
if($_GET && $_GET["signup"]){
    switch ($_GET["signup"]) {
        case "success":
            $message = "That's gurt lush. We've sent you an email to validate your account.";
            break;
        case "verified":
            $message = "Verification successful! Please log in below.";
            break;
    };
};

?>

<h1>Log In</h1>
<p><?echo$message?></p>
<form action="login.php" method="POST">
    <section class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?echo$emailField?>"/>
    </section>
    <section class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
    </section>
    <section class="form-group">
        <label for="remember">Remember Me</label>
        <input type="checkbox" name="remember" id="remember" />
    </section>
    <input type="submit" name="action" value="Log in" />
</form>

<a href="password_reset.php">Forgotten Password?</a>