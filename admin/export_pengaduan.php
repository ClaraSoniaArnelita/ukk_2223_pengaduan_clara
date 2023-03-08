<?php
header("Content-type: application/vnd-ms-exel");
header("Content-Disposition: attachment; filename=Data Pengaduan dan Tanggapan.xls");

?>

<center>
    <h3>LAPORAN PENGADUAN DAN TANGGAPAN <br> UKK REKAYASA PERANGKAT LUNAK</h3>
</center>

<a href="export_masyarakat.php" class="btn btn-success" target="_blank">Export Excel</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>TELP</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $echo_query = mysqli_query($koneksi,"SELECT a.*,b.* FROM masyarakat a INNER JOIN masyarakat b ON a.nik=b.nik");
                            while ($data = mysqli_fetch_array($echo_query)) { ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nik'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['telp'] ?></td>
           

        </tr>
        <?php } ?>
    </tbody>
</table>