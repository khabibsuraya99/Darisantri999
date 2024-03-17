<body>
 <div class='container-sm mt-5' width='400px'>
        <div class="mb-3">
        <h2 class="text-success text-start m-0"><i class="fa  me-2"></i>Tulis Karya Santri</h2><hr>
            <form action='karya_simpan.php' method='POST' enctype='multipart/form-data'>
                <input type="text" class="form-control" id="ipPenulis" name="ipPenulis" placeholder="Penulis">
                <input type="text" class="form-control mt-3" id="ipJudul" name="ipJudul" placeholder="Judul Karya">
                <select name="jenisKarya" required class="form-select mt-3" aria-label="Default select example">
                <option selected><b>Jenis Karya</b></option>
                <option value="1">Review Ngaji</option>
                <option value="2">Cerpen</option>
                <option value="3">Puisi</option>
                </select>
                <textarea class="form-control mt-3" rows="3" id="ipIsi" name="ipIsi" placeholder="Isi Karya"></textarea>
                <input type="file" class="form-control mt-3 mt-3" id="ipGbr" name="ipGbr"> <br>
                <input type="submit" class="btn btn-success form-control mt-3 w-50" value="Tambah Karya" style="background-color:green !mportant;"> 
                <br> <br> <br> <br>
            </form>
        </div>
    </div>

    <!-- tampilan karya review-->
    <div class='container-md mt-5'>
    <h2 class="text-success text-start" ><i class="fa  me-2"></i>Karya Santri : Review Ngaji</h2><hr>
        <table class="table table-striped" border="all">
                    <thead>
                        <tr class="table-success">
                        <th scope="col">Tanggal</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Judul Review</th>
                        <th scope="col">Isi Review</th>
                        <th scope="col">Gambar</th>
                        
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
            
                    <tbody>
            <?php
                require_once('koneksi.php');

                $q = "SELECT * FROM ms_reviewngaji ORDER BY date_create DESC";
                $query = mysqli_query($con,$q);

                while($data = mysqli_fetch_array($query)) {
                    $tgl = strtotime($data['date_create']);
                    echo "<tr>
                        <td width='100'>".date('d-F-Y',$tgl)."</td>
                        <td>".$data['penulis']."</td>
                        <td>".$data['judul']."</td>
                        <td>".$data['isi']."</td>
                        <td><img width='100px' src='../asset/image/".$data['gambar']."'></td>
                        
                        <td>
                        
                        <input type='button'  value='Hapus' class='btnHpsReview btn btn-danger' title='".$data['id']."'> 
                        
                        <br> <br>
                        <input type='button'  value='Edit' id='btnEditReview' class='btnEditReview btn btn-success' title='".$data['id']."'>
                        </td>
                        </tr>";
                }
            ?>

            </tbody>
            </table>
        </div>
        
        <!-- tampilan karya review-->
        <div class='container-md mt-5'>
        <h2 class="text-success text-start" ><i class="fa  me-2"></i>Karya Santri : Cerpen</h2><hr>
            <table class="table table-striped" border="all">
                        <thead>
                            <tr class="table-success">
                            <th scope="col">Tanggal</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Judul Cerpen</th>
                            <th scope="col">Isi Cerpen</th>
                            <th scope="col">Gambar</th>
                            
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                
                        <tbody>
                <?php
                    $q = "SELECT * FROM ms_cerpen ORDER BY date_create DESC";
                    $query = mysqli_query($con,$q);

                    while($data = mysqli_fetch_array($query)) {
                        $tgl = strtotime($data['date_create']);
                        echo "<tr>
                            <td width='100'>".date('d-F-Y',$tgl)."</td>
                            <td>".$data['penulis']."</td>
                            <td>".$data['judul']."</td>
                            <td>".$data['isi']."</td>
                            <td><img width='100px' src='../asset/image/".$data['gambar']."'></td>
                            
                            <td>
                            
                            <input type='button'  value='Hapus' class='btnHpsCerpen btn btn-danger' title='".$data['id']."'> 
                            
                            <br> <br>
                            <input type='button'  value='Edit' id='btnEditCerpen' class='btnEditCerpen btn btn-success' title='".$data['id']."'>
                            </td>
                            </tr>";
                    }
                ?>

                </tbody>
                </table>
            </div>

            <!-- tampilan karya review-->
            <div class='container-md mt-5'>
            <h2 class="text-success text-start" ><i class="fa  me-2"></i>Karya Santri : Puisi</h2><hr>
                <table class="table table-striped" border="all">
                            <thead>
                                <tr class="table-success">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Judul Puisi</th>
                                <th scope="col">Isi Puisi</th>
                                <th scope="col">Gambar</th>
                                
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                    
                            <tbody>
                    <?php
                        $q = "SELECT * FROM ms_puisi ORDER BY date_create DESC";
                        $query = mysqli_query($con,$q);

                        while($data = mysqli_fetch_array($query)) {
                            $tgl = strtotime($data['date_create']);
                            echo "<tr>
                                <td width='100'>".date('d-F-Y',$tgl)."</td>
                                <td>".$data['penulis']."</td>
                                <td>".$data['judul']."</td>
                                <td>".$data['isi']."</td>
                                <td><img width='100px' src='../asset/image/".$data['gambar']."'></td>
                                
                                <td>
                                
                                <input type='button'  value='Hapus' class='btnHpsPuisi btn btn-danger' title='".$data['id']."'> 
                                
                                <br> <br>
                                <input type='button'  value='Edit' id='btnEdit' class='btnEditPuisi btn btn-success' title='".$data['id']."'>
                                </td>
                                </tr>";
                        }
                    ?>

                    </tbody>
                    </table>
                </div>


</body>