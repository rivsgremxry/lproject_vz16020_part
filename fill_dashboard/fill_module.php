<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "app-test-db-3";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection failed:". $con-> connect_error);
}

function fill_module($conn)
{
    $output = '';
    $fill_module_sql = "SELECT * FROM module";
    $fill_module_result = mysqli_query($conn, $fill_module_sql);

    while ($row = mysqli_fetch_array($fill_module_result)) {
        $output .= '<option value="' . $row["id"] . '">' . $row["module_title"] . '</option>';
    }
    return $output;
}
