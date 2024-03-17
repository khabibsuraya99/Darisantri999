<body>
<!-- <div class="container">
        <div class="row">
            <div class="col">
                <h1>Data Berita </h1>
            </div>
            <div class="col text-end" >
                <a href="#" class="btn btn-success mt-3" >Tambah Berita</a>
            </div>
        </div>
    </div> -->



    <div class='container-sm mt-5' width='400px'>
        <div class="mb-3">
        <h2 class="text-success text-start m-0"><i class="fa  me-2"></i>Tulis Berita</h2><hr>
            <form action='berita_simpan.php' method='POST' enctype='multipart/form-data'>
                <input type="text" class="form-control" id="ipJudul" name="ipJudul" placeholder="Judul Berita">
                <textarea class="form-control mt-3" rows="3" id="ipIsi" name="ipIsi" placeholder="Isi Berita"></textarea>
                <input type="file" class="form-control mt-3" id="ipGbr" name="ipGbr"> <br>
                <input type="submit" class="btn btn-success form-control mt-3 w-50" value="tambah berita" style="background-color:green !mportant;"> 
                <br> <br> <br> <br>
            </form>
        </div>
    </div>

    <div class='container-md mt-5'>
    <h2 class="text-success text-start" ><i class="fa  me-2"></i>Kelola Berita</h2><hr>
        <table class="table table-striped" border="all">
                    <thead>
                        <tr class="table-success">
                        <th scope="col">Tanggal</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Gambar</th>
                        
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
            
                    <tbody>
            <?php
                require_once('koneksi.php');

                $q = "SELECT * FROM ms_berita ORDER BY date_create DESC";
                $query = mysqli_query($con,$q);

                while($data = mysqli_fetch_array($query)) {
                    $tgl = strtotime($data['date_create']);
                    echo "<tr>
                        <td width='100'>".date('d-F-Y',$tgl)."</td>
                        <td>".$data['judul']."</td>
                        <td>".$data['isi']."</td>
                        <td><img width='100px' src='../asset/image/".$data['gambar']."'></td>
                        
                        <td>
                        
                        <input type='button'  value='Hapus' class='btnHps btn btn-danger' title='".$data['id']."'> 
                        
                        <br> <br>
                        <input type='button'  value='Edit' id='btnEdit' class='btnEdit btn btn-success' title='".$data['id']."'>
                        </td>
                        </tr>";
                }
            ?>

            </tbody>
        </table>
            </div>


</body>