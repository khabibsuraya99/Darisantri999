<?php
    require_once('koneksi.php');

    $q = "DELETE FROM ms_berita WHERE id ='".$_GET['id']."'";
    $query = mysqli_query($con,$q);

    if($query == true){
        header("location:index.php?halaman=berita");   
    }else{
        echo "gagal" . mysqli_error();
    }

?>