<?php
    include "koneksi.php";
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = md5($_POST['password']);
    $query = mysqli_query("
    SELECT * From user 
    WHERE username = '$username' and password = '$password'
    ");
    $cek = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    if($cek){
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['level'] = $row['level'];
        if ($row['level']=='admin') {
            header("location:index.php");
        }else if($row['level']=='member'){
            header("location:index.php");
        }
    }else{
        echo "Anda Gagal Login. Silahkan ";?>
            <a href="index.php">Login Kembali</a>
            <?php
            echo mysqli_error($connect);
    }
?>