<?php
require_once('master.php');
// buat surat perintah untuk mengisi angka id jurusan dengan nama jurusan
$spok = "SELECT 
                santri.id,
                santri.nama AS nama_santri,
                kota_asal,
                jurusan.nama_jurusan as jurusan
        FROM santri
        JOIN jurusan
        ON santri.jurusan_id = jurusan.id";
//lakukan pekerjaan
$truk = mysqli_query($knc,$spok);


$jumlahDataPerhamalan = 5;
$jumlahData = mysqli_num_rows($truk);
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerhamalan);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerhamalan * $halamanAktif) - $jumlahDataPerhamalan;

//searching
if(isset($_GET['keyword'])){
    $cari = $_GET['keyword'];
    $spok = "SELECT 
                    santri.id,
                    santri.nama AS nama_santri,
                    kota_asal,
                    jurusan.nama_jurusan as jurusan
            FROM santri
            JOIN jurusan
            ON santri.jurusan_id = jurusan.id 
            WHERE santri.nama LIKE '%$cari%';";
            $truk = mysqli_query($knc,$spok);
    //lakukan pekerjaan
    } else {
        $spok = "SELECT 
                    santri.id,
                    santri.nama AS nama_santri,
                    kota_asal,
                    jurusan.nama_jurusan as jurusan
            FROM santri 
            ON santri.jurusan_id = jurusan.id LIMIT $awalData, $jumlahDataPerhamalan;";
        $truk = mysqli_query($knc,$spok);
    }
?>

<table  class="table  mt-2" border='1'  rules='all'>
                <tr class="table-danger">
                    <th>No.</th>
                    <th>Nama Santri</th>
                    <th>Kota Asal</th>
                    <th>Jurusan</th>
                    <th>Kick Santri??</th>
                </tr>

                <!-- menampilkan data santri & djurusan -->
                <?php
                    $n = 1;
                    while($tangan = mysqli_fetch_array($truk)){
                ?>
                <tr>
                    <td><?= $n++ ?></td>
                    <td><?= $tangan['nama_santri']?></td>
                    <td><?= $tangan['kota_asal']?></td>
                    <td><?= $tangan['jurusan']?></td>
                    <td>
                        <a href="update.php?id=<?= $tangan['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $tangan['id'] ?>">Delete</a>
                        <a href="edit.php?id=<?= $tangan['id'] ?>">Edit_PW</a>
                    </td>
                    </tr>
                <?php
                }
                ?>             
        </table>