<?php include 'includes/header.php'; ?>

<div class="container">

<div class="card">

<h2>Registration</h2>

<form action="save_user.php"
      method="POST"
      onsubmit="return validateRegisterForm()">

<label>Full Name</label>
<input type="text" id="fullname"
       name="fullname" required>

<label>Email</label>
<input type="email" id="email"
       name="email" required>

<label>Password</label>
<input type="password"
       id="password"
       name="password"
       required
       onkeyup="checkPasswordStrength()">

<div id="strength"></div>

<br>

<button class="btn">
Register
</button>

</form>

</div>

</div>

<script src="js/validation.js"></script>

<?php include 'includes/footer.php'; ?>