<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "app-test-db-3";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection failed:". $con-> connect_error);
}

function fill_actor($conn)
{
    $output = '';
    $fill_actor_sql = "SELECT * FROM actor";
    $fill_actor_result = mysqli_query($conn, $fill_actor_sql);

    while ($row = mysqli_fetch_array($fill_actor_result)) {
        $output .= '<option value="' . $row["id"] . '">' . $row["actor_title"] . '</option>';
    }
    return $output;
}
