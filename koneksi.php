<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "finalprojectweb";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect) {
        echo "Koneksi dengan MYSQL berhasil<br>";
    }else{
        echo "Koneksi dengan MYSQLL gagal" . mysqli_connect_error();
    }

?>   	