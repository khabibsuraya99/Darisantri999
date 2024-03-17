<?php
    require_once('koneksi.php');

    $q = "SELECT * FROM ms_berita WHERE id='".$_GET['id']."'";
    $query = mysqli_query($con,$q);

    $id = "";
    $tgl ="";
    $jdl ="";
    $isi ="";
    $gbr ="";

    while ($hasil = mysqli_fetch_array($query)){
        
        $id =$hasil['id'];
        $tgl =$hasil['date_create'];
        $jdl =$hasil['judul'];
        $isi =$hasil['isi'];
        $gbr =$hasil['gambar'];     
    }


?>
<body>
    <div class='container-sm mt-5' width='400px'>
        <div class="mb-3">
        <form action='update.php' method='POST'>
            <input type='hidden' name='ipId' value='<?php echo $id ?>' >
            <h2 class="text-start text-success">Edit Berita</h2><hr>
            <h6 class="text-start text-success">Tanggal Berita</h6>
            <input type='datetime-local' class="form-control mt-3" name='ipTgl' required value='<?php echo $tgl ?>'> <br>
            <h6 class="text-start text-success">Judul Berita</h6>
            <input type='text' class="form-control" name='ipJudul' required value='<?php echo $jdl ?>'> <br>
            <h6 class="text-start text-success">Isi Berita</h6>
            <input type='text' class="form-control mt-3" name='ipIsi' required value='<?php echo $isi ?>'> <br>
            <h6 class="text-start text-success">Gambar Berita</h6>
            <input type='file' class="form-control mt-3" name='ipGbr' required value='<?php echo $gbr ?>'> <br>
            <input type='submit' class="btn btn-success form-control mt-3 w-50" value="Edit Berita">
        </form>

        </div>
    </div>
</body>