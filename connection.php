<?php
    require("configuration.php");

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    if($conn-> connect_error){
        die("Connection failed:". $con-> connect_error);
    }
?>