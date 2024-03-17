<?php
    require_once('koneksi.php');

    $q = "SELECT * FROM ms_carrousel WHERE id='".$_GET['id']."'";
    $query = mysqli_query($con,$q);

    $id = "";
    $jdl ="";
    $cpt ="";
    $gbr ="";

    while ($hasil = mysqli_fetch_array($query)){
        
        $id =$hasil['id'];
        $jdl =$hasil['judul'];
        $cpt =$hasil['caption'];
        $gbr =$hasil['gambar'];     
    }


?>

<body>
    <div class='container-sm mt-5' width='400px'>
        <div class="mb-3">
        <form action='update_carrousel.php' method='POST'>
            <input type='hidden' name='ipId' value='<?php echo $id ?>' >
            <h2 class="text-start text-success">Edit Gambar Banner Utama</h2><hr>
            <h6 class="text-start text-success">Judul</h6>
            <input type='text' class="form-control" name='ipJudul' required value='<?php echo $jdl ?>'> <br>
            <h6 class="text-start text-success">Isi</h6>
            <input type='text' class="form-control " name='ipCaption' required value='<?php echo $cpt ?>'> <br>
            <h6 class="text-start text-success">Gambar</h6>
            <input type='file' class="form-control" name='ipGbr' required value='<?php echo $gbr ?>'> <br>
            <input type='submit' class="btn btn-success form-control mt-3 w-50" value="Update Carrousel">
        </form>

        </div>
    </div>
</body>