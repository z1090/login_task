

<h1>Log In</h1>
<p><?echo$errMessage?></p>
<form action="login.php" method="POST">
    <section class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
    </section>
    <section class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
    </section>
    <input type="submit" name="action" value="Log in" />
</form>