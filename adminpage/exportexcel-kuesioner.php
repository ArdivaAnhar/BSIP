<?php
include "koneksi-kuesioner.php";

// persiapan untuk excel
header('Content-type: aplication/vnd-ms-excel');
header('Content-Disposition: attachment; filename= Data Indeks Kepuasan Masyarakat(IKM).xls');
header('Pragma no-cache');
header('Expires:0');

?>

<table border="1">
    <thead>
        <tr>
            <th colspan="9">
                Data Indeks Kepuasan Masyarakat(IKM)
            </th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Kelamin</th>
            <th>Usia</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Layanan</th>
            <th>Responden</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $tgl1 = $_POST['tanggala'];
            $tgl2 = $_POST['tanggalb'];

            $tampil = mysqli_query($koneksi, "SELECT * FROM tkuesio where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
            $no = 1;

            while($data = mysqli_fetch_array($tampil)){
            ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['jam'] ?></td>
            <td><?= $data['kelamin'] ?></td>
            <td><?= $data['usia'] ?></td>
            <td><?= $data['pendidikan'] ?></td>
            <td><?= $data['pekerjaan'] ?></td>
            <td>
                -<?= $data['layanan1'] ?>
                <br>
                -<?= $data['layanan2'] ?>
                <br>
                -<?= $data['layanan3'] ?>
                <br>
                -<?= $data['layanan4'] ?>
                <br>
                -<?= $data['layanan5'] ?>
                <br>
                -<?= $data['layanan6'] ?>
                <br>
                -<?= $data['layanan7'] ?>
                <br>
                -<?= $data['layanan8'] ?>
            </td>
            <td>
                No.1 = <?= $data['kuesio1'] ?>
                <br>
                No.2 = <?= $data['kuesio2'] ?>
                <br>
                No.3 = <?= $data['kuesio3'] ?>
                <br>
                No.4 = <?= $data['kuesio4'] ?>
                <br>
                No.5 = <?= $data['kuesio5'] ?>
                <br>
                No.6 = <?= $data['kuesio6'] ?>
                <br>
                No.7 = <?= $data['kuesio7'] ?>
                <br>
                No.8 = <?= $data['kuesio8'] ?>
                <br>
                No.9 = <?= $data['kuesio9'] ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>