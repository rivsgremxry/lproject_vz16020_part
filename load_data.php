<?php  
require("connection.php");

$output = '';  

if(isset($_POST["id"]))  
{  
    if($_POST["id"] != '')  
    {  
        $sql = "SELECT * FROM requirement WHERE module_id = '".$_POST["id"]."'";  
    }  
    else  
    {  
        $sql = "SELECT * FROM requirement";  
    }  
    $result = mysqli_query($conn, $sql);  
    while($row = mysqli_fetch_array($result))  
    {  
        $output .= '<div class="col-6" style="padding-top:10px; margin-bottom:13px;">';
        $output .= '<input class="form-check-input" type="checkbox" id="' . $row["id"] . '">';
        $output .= '<label class="form-check-label" for="' . $row["id"] . '">';
        $output .= $row["requirement_title"];
        $output .= '</label>';
        $output .= '</div>';
    }  
    echo $output;  
}
