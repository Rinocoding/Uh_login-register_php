<?php
require "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: index.html");
        exit();
    } else{
        
        $query_sql = "SELECT * FROM pendaftaran WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $query_sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: loginsalah.html");
            exit();
        }
    }
 


?>