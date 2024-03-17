<?php
    require_once('koneksi.php');

    $q = "UPDATE ms_carrousel SET
    judul ='".$_POST['ipJudul']."',
    caption ='".$_POST['ipCaption']."',
    gambar ='".$_POST['ipGbr']."'
    WHERE id ='".$_POST['ipId']."'";

    $query=mysqli_query($con,$q);

    if($query==true){      
        header("location:index.php?halaman=cr");   
    }else{
        echo "gagal".mysqli_error();
    }
?>