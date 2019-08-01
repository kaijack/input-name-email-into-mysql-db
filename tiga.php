<?php
  include "dua.php";

  $name  = $_REQUEST['name'];
  $email  = $_REQUEST['email'];

  $mysqli  = "INSERT INTO datadiri (name, email) VALUES ('$name', '$email')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>