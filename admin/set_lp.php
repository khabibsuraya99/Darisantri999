<body>
        <div class='container-md mt-5'>
            <h2 class="text-success text-start" ><i class="fa  me-2"></i>Set Gambar Banner Utama</h2><hr>
                <table class="table table-striped" border="all">
                    <thead>
                        <tr class="table-success">
                        <th scope="col">Judul</th>
                        <th scope="col">Caption</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
            
                    <tbody>
            <?php
                require_once('koneksi.php');

                $q = "SELECT * FROM ms_carrousel ORDER BY id DESC";
                $query = mysqli_query($con,$q);

                while($data = mysqli_fetch_array($query)) {
                   
                    echo "<tr>
                        <td>".$data['judul']."</td>
                        <td>".$data['caption']."</td>
                        <td>".$data['gambar']."</td>
                        <td><input type='button'  value='Edit' id='btnEdit' class='btnEditCr btn btn-success' title='".$data['id']."'></td>
                        </tr>";
                }
            ?>

            </tbody>
        </table>
            </div>
            
</body>