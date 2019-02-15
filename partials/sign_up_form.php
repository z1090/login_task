
<h1>Sign Up</h1>
<p><?echo$message?></p>
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
    <section class="form-group">
    <label for="secret_question">Secret Question</label>
        <select name="secret_question" id="secret_question">
            <option value="1">Your Mother's maiden name</option>
            <option value="2">Town you were born in</option>
            <option value="3">Favourite type of sausage</option>
            <option value="4">Name of your sex tape</option>
        </select>
    </section>
    <section class="form-group">
        <label for="secret_answer">Secret Answer</label>
        <input type="text" name="secret_answer" id="secret_answer" />
    </section>
    <input type="submit" name="action" value="Sign up" />
</form>

