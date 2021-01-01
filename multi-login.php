<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=($_POST['password']);

    $query = "SELECT * FROM user where username='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['kategori'] == '1') {
        echo "Welcome! Click " ;?>
        <a href="index.php">Me!</a>
        <?php
    }else if ($row['kategori'] == '2'){
        echo "Welcome! Click " ;?>
        <a href="indexAdmin.php">Me!</a>
        <?php
    }else{
        echo "Anda gagal login. Silahkan " ;?>
        <a href="login.php">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>