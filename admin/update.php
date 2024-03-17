<?php
    require_once('koneksi.php');

    $q = "UPDATE ms_berita SET
    date_create = '".$_POST['ipTgl']."',
    judul ='".$_POST['ipJudul']."',
    isi ='".$_POST['ipIsi']."',
    gambar ='".$_POST['ipGbr']."'
    WHERE id ='".$_POST['ipId']."'";

    $query=mysqli_query($con,$q);

    if($query==true){      
        header("location:index.php?halaman=berita");   
    }else{
        echo "gagal".mysqli_error();
    }
?>