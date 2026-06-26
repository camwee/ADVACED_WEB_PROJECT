<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

include 'includes/student_header.php';
?>

<div class="container">

    <div class="welcome-box">
        <h1>Welcome <?php echo $_SESSION['fullname']; ?></h1>
        <p>Student Dashboard</p>
    </div>

    <div class="dashboard-cards">

        <div class="dashboard-card">
            <h3>My Profile</h3>
            <p>View your personal information.</p>

            <a href="my_details.php">
                View Details
            </a>
        </div>

        <div class="dashboard-card">
            <h3>Logout</h3>
            <p>Sign out of your account.</p>

            <a href="logout.php">
                Logout
            </a>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>