
<?php include 'includes/header.php'; ?>

<div class="container">

    <div class="card">

        <h2>User Login</h2>

        <form action="login_process.php"
              method="POST"
              onsubmit="return validateLoginForm()">

            <label>Email</label>

            <input type="email"
                   id="login_email"
                   name="email"
                   placeholder="Enter your email"
                   required>

            <label>Password</label>

            <input type="password"
                   id="login_password"
                   name="password"
                   placeholder="Enter your password"
                   required>

            <br><br>

            <button type="submit" class="btn">
                Login
            </button>

        </form>

        <hr style="margin:20px 0;">

        <div class="auth-link">
            <div class="auth-link">
    Don't have an account?
    <a href="user_registration.php">Register Here</a>
</div>

        </div>

    </div>

</div>

<script src="js/validation.js"></script>

<?php include 'includes/footer.php'; ?>
