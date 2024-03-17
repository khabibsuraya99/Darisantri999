<body>
        <div class='container-md mt-5'>
            <h2 class="text-success text-start" ><i class="fa  me-2"></i>Daftar Admin Darisantri.com</h2><hr>
                <table class="table table-striped" border="all">
                    <thead>
                        <tr class="table-success">
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
            
                    <tbody>
            <?php
                require_once('koneksi.php');

                $q = "SELECT * FROM ms_user ORDER BY id DESC";
                $query = mysqli_query($con,$q);

                while($data = mysqli_fetch_array($query)) {
                   
                    echo "<tr>
                        <td>".$data['id']."</td>
                        <td>".$data['nama']."</td>
                        <td>".$data['email']."</td>
                        </tr>";
                }
            ?>

            </tbody>
        </table>
            </div>
            <p>Capek ngurusin web? Mau nambah temen??? <span><a href="#" data-bs-toggle='modal' data-bs-target='#modalRegister' type="submit" class="mt-3 ">Daftarin Temenmu Disini</a></span></p>

        <!-- Modal Register -->
        <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-center" id="exampleModalLabel">Daftar User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="register_proses.php" method="POST">
                    <label for="registNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="registNama"  id="registNama" placeholder="Siapa Namamu ..!">
                    <label for="registEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="registEmail" id="registEmail" placeholder="name@example.com">
                    <label for="registPw" class="form-label">Password</label>
                    <input type="password" class="form-control" name="registPw" id="registPw" placeholder="Masukan 7 Karakter Mengandung Angka dan Simbol">
                    <label for="registPw" class="form-label">Masukin Password Lagi</label>
                    <input type="password" class="form-control" id="registPw2" placeholder="Masukan Sandi Yang Sama"> 
                    <div id="alertPw" style="color:red"></div> <br>
                    <input type="submit" class="form-control btn btn-danger">
                </form>
            </div>
            
           
            </div>
        </div>
        </div>
</body>