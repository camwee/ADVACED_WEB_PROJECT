<?php
session_start();
include 'db_connect.php';

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM students WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$student = mysqli_fetch_assoc($result);

include 'includes/student_header.php';
?>

<?php
if($student)
{
?>
    <div class="container">

<div class="details-card">

<h2>My Student Details</h2>

<div class="detail-row">
<span class="detail-title">Admission Number</span>
<span class="detail-value"><?php echo $student['admission_no']; ?></span>
</div>

<div class="detail-row">
<span class="detail-title">First Name</span>
<span class="detail-value"><?php echo $student['first_name']; ?></span>
</div>

<div class="detail-row">
<span class="detail-title">Last Name</span>
<span class="detail-value"><?php echo $student['last_name']; ?></span>
</div>

<div class="detail-row">
<span class="detail-title">Gender</span>
<span class="detail-value"><?php echo $student['gender']; ?></span>
</div>

<div class="detail-row">
<span class="detail-title">Email</span>
<span class="detail-value"><?php echo $student['email']; ?></span>
</div>

<div class="detail-row">
<span class="detail-title">Phone</span>
<span class="detail-value"><?php echo $student['phone']; ?></span>
</div>

</div>

<div style="text-align:center;">
<a href="student_dashboard.php" class="dashboard-btn">
Back to Dashboard
</a>
</div>
</div>
<?php
}
else
{
    echo "No student record found.";
}
?>

<br><br>

<?php include 'includes/footer.php'; ?>