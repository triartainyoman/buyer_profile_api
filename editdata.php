<?php
include 'conn.php';

echo "Edit Data";
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

$connect->query("UPDATE users SET name='" . $name . "', username = '" . $username . "', gender = '" . $gender . "', phone_number = '" . $phone_number . "', email = '" . $email . "' WHERE id=" . $id);
