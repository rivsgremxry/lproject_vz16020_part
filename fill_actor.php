<?php

require("connection.php");

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
