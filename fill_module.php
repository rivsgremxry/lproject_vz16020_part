<?php

require("connection.php");

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
