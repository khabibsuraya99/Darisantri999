<?php
session_start();
$upload = move_uploaded_file($_FILES["ipGbr"]["tmp_name"], "../asset/image/".$_FILES["ipGbr"]["name"]);

if($upload){
    require_once('koneksi.php');

    $q = "INSERT INTO ms_berita 
    (judul,isi,gambar,user_create)
    VALUES (
        '".$_POST['ipJudul']."',
        '".$_POST['ipIsi']."',
        '".$_FILES["ipGbr"]["name"]."',
        '".$_SESSION['username']."')";
        $query = mysqli_query($con,$q);
        
        if($query){
        header("location:index.php?halaman=berita");
        }
}

?>