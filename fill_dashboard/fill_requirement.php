<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "app-test-db-3";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn-> connect_error){
    die("Connection failed:". $con-> connect_error);
}

function fill_requirement($conn)
{
    $output = '';
    $fill_requirement_sql = "SELECT * FROM requirement";
    $fill_requirement_result = mysqli_query($conn, $fill_requirement_sql);

    while ($row = mysqli_fetch_array($fill_requirement_result)) {
        $output .= '<div class="col-6" style="padding-top:10px; margin-bottom:13px;">';
        $output .= '<input class="form-check-input" type="checkbox" id="' . $row["id"] . '" value="'.$row["requirement_title"].'">';
        $output .= '<label class="form-check-label" for="' . $row["id"] . '">';
        $output .= $row["requirement_title"];
        $output .= '</label>';
        $output .= '</div>';
    }
    return $output;
}
