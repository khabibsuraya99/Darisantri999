<?php
session_start();

?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="text-success mt-5"> Assalamualaikum Wr. Wb.</h1>
        <?php
            if (isset($_SESSION['username'])){
                echo "<h4> Selamat Datang ".$_SESSION ['username'].", Di Menu Dashboard Admin Darisantri.com. <br> Dalam Menu Ini Anda Sebagai Pengelola Konten Darisantri.com Dapat Mengelola Berita dan Karya Santri Mulai Dari Menambahkan, Menghapus, dan Mengedit Konten.</h4>
                ";
            }else {
                echo $_SESSION ['username'];
                echo "kamusiapa";
                // echo "<script>window.location.href='login.php';</script>";
            };
        ?>
        

    </div>
</div>