<?php 
  include 'conn.php';

  echo "Edit Data";
  $id = $_POST['id'];
  $image_url = $_POST['image_url'];

  $connect->query("UPDATE users SET image_url = '".$image_url."' WHERE id=".$id);
