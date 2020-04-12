<?php
require("../connection.php");

$title = mysqli_real_escape_string($con, $_REQUEST['title']);
$description = mysqli_real_escape_string($con, $_REQUEST['description']);

$sql = "INSERT INTO function (title, description) VALUES ('$title', '$description')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

header("Location: http://localhost/lproject_vz16020_part/index.php");
die();
mysqli_close($link);