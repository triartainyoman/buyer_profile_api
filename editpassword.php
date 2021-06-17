<?php
include 'conn.php';

echo "Edit Data";
$id = $_POST['id'];
$password = $_POST['password'];

$connect->query("UPDATE users SET password = '" . $password . "' WHERE id=" . $id);
