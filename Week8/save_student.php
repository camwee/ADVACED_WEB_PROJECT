<?php

include 'db_connect.php';

$admission_no = $_POST['admission_no'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students
(admission_no, first_name, last_name, gender, email, phone)
VALUES
('$admission_no','$first_name','$last_name','$gender','$email','$phone')";

if(mysqli_query($conn, $sql))
{
    echo "Student Registered Successfully";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>