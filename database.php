<?php
session_start();
function getDB() {
$db_host = "localhost";
$db_name = "dbfit_users";
$db_user = "bird";
$db_pass = "yX7yn]EjO.rQLDe[";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

return $conn;
}