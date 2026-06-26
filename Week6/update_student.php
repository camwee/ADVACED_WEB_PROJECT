<?php

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST['id'];
    $admission_no = $_POST['admission_no'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE students SET
                admission_no = '$admission_no',
                first_name = '$first_name',
                last_name = '$last_name',
                gender = '$gender',
                email = '$email',
                phone = '$phone'
            WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result)
    {
        header("Location: view_students.php");
        exit();
    }
    else
    {
        echo "Error updating student: " . mysqli_error($conn);
    }
}
else
{
    echo "Invalid request.";
}

?>
