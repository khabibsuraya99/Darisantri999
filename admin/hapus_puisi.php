<?php
    require_once('koneksi.php');

    $q = "DELETE FROM ms_puisi WHERE id ='".$_GET['id']."'";
    $query = mysqli_query($con,$q);

    if($query == true){
        header("location:index.php?halaman=karya");   
    }else{
        echo "gagal" . mysqli_error();
    }

?>