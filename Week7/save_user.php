<?php

include 'db_connect.php';

$fullname = $_POST['fullname'];
$email = $_POST['email'];

$password = password_hash(
    $_POST['password'],
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(fullname,email,password,role)

VALUES

('$fullname','$email','$password','student')";

if(mysqli_query($conn,$sql))
{
    header("Location: login.php");
}
else
{
    echo mysqli_error($conn);
}

?>