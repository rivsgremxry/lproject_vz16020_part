<?php

require("../connection.php");

if (isset($_POST["requirements"])) {
    if (isset($_POST["actor_id"])) {
        $req = $_POST["requirements"];
        $actor_id = $_POST["actor_id"];
        if (($req && $actor_id) != "") {
            echo "<script>console.log('requirement_id: " . $req . "' );</script>";
            echo "<script>console.log('actor_id: " . $actor_id . "' );</script>";

            $sql = "UPDATE `requirement` SET `actor_id` = '$actor_id' WHERE `requirement`.`id` = $req;";

            if ($conn->query($sql) === TRUE) {
                echo "<script>console.log('Record updated successfully!' );</script>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
}
