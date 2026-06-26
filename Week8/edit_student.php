<?php

include 'db_connect.php';

if(!isset($_GET['id']))
{
    die("Student ID not provided.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    die("Student not found.");
}

$row = mysqli_fetch_assoc($result);

include 'includes/header.php';

?>

<div class="container">

```
<div class="card">

    <h2>Edit Student</h2>

    <br>

    <form action="update_student.php" method="POST">

        <input type="hidden" name="id"
               value="<?php echo $row['id']; ?>">

        <label>Admission Number</label>
        <input type="text"
               name="admission_no"
               value="<?php echo $row['admission_no']; ?>"
               required>

        <label>First Name</label>
        <input type="text"
               name="first_name"
               value="<?php echo $row['first_name']; ?>"
               required>

        <label>Last Name</label>
        <input type="text"
               name="last_name"
               value="<?php echo $row['last_name']; ?>"
               required>

        <label>Gender</label>
        <select name="gender">

            <option value="Male"
            <?php if($row['gender'] == 'Male') echo 'selected'; ?>>
            Male
            </option>

            <option value="Female"
            <?php if($row['gender'] == 'Female') echo 'selected'; ?>>
            Female
            </option>

        </select>

        <label>Email</label>
        <input type="email"
               name="email"
               value="<?php echo $row['email']; ?>">

        <label>Phone</label>
        <input type="text"
               name="phone"
               value="<?php echo $row['phone']; ?>">

        <button type="submit" class="btn">
            Update Student
        </button>

    </form>

</div>
```

</div>

<?php include 'includes/footer.php'; ?>
