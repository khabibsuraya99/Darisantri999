<?php
    session_start();
    require_once("koneksi.php");

    $q = "SELECT * FROM ms_user
    WHERE email = '".$_POST['ipEmail']."'
    AND password = '".md5(addslashes($_POST['ipPw']))."'";

    $query = mysqli_query($con,$q);
    $jmldata = mysqli_num_rows($query);

    if($jmldata>=1){
        $data = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $data['nama'];
        header("location:index.php");
    } else {
        header("location:login.php");
    }






?>