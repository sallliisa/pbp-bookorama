<?php 
$db_host = 'localhost';
$db_database = 'bookorama';
$db_username = 'gamer';
$db_password = '12345';

$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno) {
    die ("gamer:". $db->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>