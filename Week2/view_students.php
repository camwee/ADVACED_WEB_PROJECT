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
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)){ ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['admission_no']; ?></td>
                <td>
                    <?php
                    echo $row['first_name'] . " " . $row['last_name'];
                    ?>
                </td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
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