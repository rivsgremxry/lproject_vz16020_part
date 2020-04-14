<?php
require("../connection.php");

$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);

$module_id = mysqli_real_escape_string($conn, $_REQUEST['module1']);
$actor_id = mysqli_real_escape_string($conn, $_REQUEST['actor1']);

$sql = "INSERT INTO `requirement` (`requirement_title`, `requirement_description`, `module_id`, `actor_id`) VALUES ('$title', '$description', '$module_id', '$actor_id')";

if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

header("Location: http://localhost/lproject_vz16020_part/index.php");
die();
mysqli_close($link);
