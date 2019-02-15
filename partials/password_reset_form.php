
<h1>Reset Password</h1>
<p><?echo$message?></p>
<form action="login.php" method="POST">
    <section class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" />
    </section>
    <section class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" />
    </section>
    <section class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
    </section>
    <section class="form-group">
        <label for="secret_question">Your Mother's maiden name</label>
        <input type="text" name="secret_question" id="secret_question" />
    </section>
    <input type="submit" name="action" value="Log in" />
</form>

<a href="password_reset.php">Forgotten Password?</a>