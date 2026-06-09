<?php

include 'db_connect.php';

if(!isset($_GET['id']))
{
    die("Student ID not provided.");
}

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = '$id'";

if(mysqli_query($conn, $sql))
{
    header("Location: view_students.php");
    exit();
}
else
{
    echo "Delete Failed: " . mysqli_error($conn);
}

?>
