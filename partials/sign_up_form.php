
<h1>Sign Up</h1>
<p><?echo$errMessage?></p>
<form action="sign_up.php" method="POST">
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
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
    </section>
    <section class="form-group">
        <label for="password-confirm">Confirm Password</label>
        <input type="password" name="password-confirm" id="password-confirm" />
    </section>
    <input type="submit" name="action" value="Sign up" />
</form>