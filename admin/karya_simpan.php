<?php
    session_start();
    $upload = move_uploaded_file($_FILES["ipGbr"]["tmp_name"], "../asset/image/".$_FILES["ipGbr"]["name"]);

    require_once('koneksi.php');

    if($_POST['jenisKarya']==1){
        $q = "INSERT INTO ms_reviewngaji 
        (penulis,judul,isi,gambar,user_create)
        VALUES (
            '".$_POST['ipPenulis']."',
            '".$_POST['ipJudul']."',
            '".$_POST['ipIsi']."',
            '".$_FILES["ipGbr"]["name"]."',
            '".$_SESSION['username']."')";
            $query = mysqli_query($con,$q);
            
            if($query){
            header("location:index.php?halaman=karya");
            }

    }else if($_POST['jenisKarya']==2){
        $q = "INSERT INTO ms_cerpen 
        (penulis,judul,isi,gambar,user_create)
        VALUES (
            '".$_POST['ipPenulis']."',
            '".$_POST['ipJudul']."',
            '".$_POST['ipIsi']."',
            '".$_FILES["ipGbr"]["name"]."',
            '".$_SESSION['username']."')";
            $query = mysqli_query($con,$q);
            
            if($query){
            header("location:index.php?halaman=karya");
            }
    }else if($_POST['jenisKarya']==3){
        $q = "INSERT INTO ms_puisi 
        (penulis,judul,isi,gambar,user_create)
        VALUES (
            '".$_POST['ipPenulis']."',
            '".$_POST['ipJudul']."',
            '".$_POST['ipIsi']."',
            '".$_FILES["ipGbr"]["name"]."',
            '".$_SESSION['username']."')";
            $query = mysqli_query($con,$q);
            
            if($query){
            header("location:index.php?halaman=karya");
            }
    }

?>