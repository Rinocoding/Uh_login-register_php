<?php
require "koneksi.php";
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $institusi = $_POST['institusi'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query_sql = "INSERT INTO pendaftaran (fullname, username, institusi, email, password) 
                VALUES ('$fullname', '$username', '$institusi', '$email', '$password')";
  
    if(mysqli_query($conn, $query_sql)) {
        
        header("Location: index.html");
    } else {
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    }
?>