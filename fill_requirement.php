<?php

require("connection.php");

function fill_requirement($conn)
{
    $output = '';
    $fill_requirement_sql = "SELECT * FROM requirement";
    $fill_requirement_result = mysqli_query($conn, $fill_requirement_sql);

    while ($row = mysqli_fetch_array($fill_requirement_result)) {
        // $output .= '<div class="col-md-3">';
        // $output .= '<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["requirement_title"].'';
        // $output .= '</div>';
        // $output .= '</div>';

        $output .= '<div class="col-6" style="padding-top:10px; margin-bottom:13px;">';
        $output .= '<input class="form-check-input" type="checkbox" id="' . $row["id"] . '">';
        $output .= '<label class="form-check-label" for="' . $row["id"] . '">';
        $output .= $row["requirement_title"];
        $output .= '</label>';
        $output .= '</div>';
    }
    return $output;
}
