<?php
    require_once('koneksi.php');

    $q = "SELECT * FROM ms_puisi WHERE id='".$_GET['id']."'";
    $query = mysqli_query($con,$q);

    $id = "";
    $pnls ="";
    $jdl ="";
    $isi ="";
    $gbr ="";

    while ($hasil = mysqli_fetch_array($query)){
        
        $id =$hasil['id'];
        $pnls =$hasil['penulis'];
        $jdl =$hasil['judul'];
        $isi =$hasil['isi'];
        $gbr =$hasil['gambar'];     
    }


?>
<body>
    <div class='container-sm mt-5' width='400px'>
        <div class="mb-3">
        <form action='update_puisi.php' method='POST'>
            <input type='hidden' name='ipId' value='<?php echo $id ?>' >
            <h2 class="text-start text-success">Edit Puisi</h2><hr>
            <h6 class="text-start text-success">Penulis</h6>
            <input type='text' class="form-control " name='ipPenulis' required value='<?php echo $pnls ?>'> <br>
            <h6 class="text-start text-success">Judul Puisi</h6>
            <input type='text' class="form-control" name='ipJudul' required value='<?php echo $jdl ?>'> <br>
            <h6 class="text-start text-success">Isi</h6>
            <input type='text' class="form-control " name='ipIsi' required value='<?php echo $isi ?>'> <br>
            <h6 class="text-start text-success">Gambar</h6>
            <input type='file' class="form-control" name='ipGbr' required value='<?php echo $gbr ?>'> <br>
            <input type='submit' class="btn btn-success form-control mt-3 w-50" value="Edit Review Ngaji">
        </form>

        </div>
    </div>
</body>