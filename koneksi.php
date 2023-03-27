<?php
    $host = 'localhost:8111';
    $user = 'root';
    $pass = '';
    $db = 'crud_gc';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if($conn){
    //echo "koneksi berhasil";
    }

    mysqli_select_db($conn, $db);
?>