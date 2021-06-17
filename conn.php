<?php
  $connect = new mysqli("localhost", "root", "", "db_buyer_profile_api");

  if ($connect) {

  } else {
    echo "Koneksi ke db gagal";
    exit();
  }
