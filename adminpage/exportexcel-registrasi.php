<?php
include "koneksi-registrasi.php";

// persiapan untuk excel
header('Content-type: aplication/vnd-ms-excel');
header('Content-Disposition: attachment; filename= Data Pengunjung Acara.xls');
header('Pragma no-cache');
header('Expires:0');

?>

<table border="1">
    <thead>
        <tr>
            <th colspan="7">
                Rekapitulasi Data Pengunjung Acara
            </th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Acara</th>
            <th>Nama Lengkap</th>
            <th>Instansi</th>
            <th>Email</th>
            <th>No.Telp</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $tgl1 = $_POST['tanggala'];
            $tgl2 = $_POST['tanggalb'];

            $tampil = mysqli_query($koneksi, "SELECT * FROM tregis where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
            $no = 1;

            while($data = mysqli_fetch_array($tampil)){
            ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['acara'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['instansi'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['telp'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>