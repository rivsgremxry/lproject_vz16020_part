<?php
require("connection.php");

$module_sql = "SELECT * FROM `module`";
$module_values = $con->query($module_sql);

$actor_sql = "SELECT * FROM `actor`";
$actor_values = $con->query($actor_sql);

$function_sql = "SELECT id, title FROM `function`";
$function_values = $con->query($function_sql);