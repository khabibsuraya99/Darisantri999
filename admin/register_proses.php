<?php
    require_once("koneksi.php");

// print_r($_POST);

if (isset($_POST['registNama'])){
    $q = "INSERT INTO ms_user (nama, email, password)
        VALUES ('".addslashes($_POST['registNama'])."','".addslashes($_POST['registEmail'])."','".md5(addslashes($_POST['registPw']))."')";
        $query = mysqli_query($con,$q);

        if ($query){
            // echo "<script>alert('oke boz berhasil');</script>";
            header("location:index.php?halaman=setadmin");
        }
        echo "gagal". mysqli_error();
}












?>