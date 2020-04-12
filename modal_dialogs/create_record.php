<?php
require("../connection.php");

if (isset($_POST["module1"])) {
    $module_id = $_POST['module1'];
    $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
    $description = mysqli_real_escape_string($conn, $_REQUEST['description']);

    $sql = "INSERT INTO `requirement` (`requirement_title`, `requirement_description`, `module_id`) 
VALUES ('$title', '$description', '$module_id')";

    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    header("Location: http://localhost/lproject_vz16020_part/index.php");
    die();
    mysqli_close($link);
}
