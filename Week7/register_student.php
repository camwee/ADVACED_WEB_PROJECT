<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

if($_SESSION['role'] != 'admin')
{
    die("Access Denied");
}
?>


<?php include 'includes/header.php'; ?>

<div class="container">

<div class="card">

<h2>Student Registration</h2>

<br>

<form action="save_student.php" method="POST">

<label>Admission Number</label>
<input type="text" name="admission_no" required>

<label>First Name</label>
<input type="text" name="first_name" required>

<label>Last Name</label>
<input type="text" name="last_name" required>

<label>Gender</label>
<select name="gender">
    <option>Male</option>
    <option>Female</option>
</select>

<label>Email</label>
<input type="email" name="email">

<label>Phone</label>
<input type="text" name="phone">

<button class="btn">
Save Student
</button>

</form>

</div>

</div>

<?php include 'includes/footer.php'; ?>