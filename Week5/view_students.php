<?php

session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}

?>

<?php

include 'db_connect.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}

include 'includes/header.php';

?>

<div class="container">

<div class="card">

    <h2>Registered Students</h2>

    <br>

    <?php if(mysqli_num_rows($result) > 0){ ?>

    <table>

        <tr>
            <th>ID</th>
            <th>Admission No</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['admission_no']; ?></td>
            <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>

            <td>
                <a href="edit_student.php?id=<?php echo $row['id']; ?>">
                    <button class="btn">Edit</button>
                </a>

                <a href="delete_student.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this student?');">
                    <button style="background:red;color:white;padding:10px;border:none;border-radius:5px;">
                        Delete
                    </button>
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

    <?php } else { ?>

        <p style="color:red;">
            No students have been registered yet.
        </p>

    <?php } ?>

</div>

</div>

<?php include 'includes/footer.php'; ?>
