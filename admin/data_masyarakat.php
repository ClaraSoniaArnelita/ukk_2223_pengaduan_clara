
<div class="bg" style="height: 585px; background-image: url('../assets/img/purple.jpeg'); background-size: cover;">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    DATA MASYARAKAT
                </div>
                <div class="card-body">
                <a href="export_masyarakat.php" class="btn btn-success" target="_blank">Export Excel</a> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
                        Tambah Data
                    </button>

                    <!-- Modal Tambah -->
                    <div class="modal fade" id="tambahData"
                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Masyarakat</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="index.php?page=masyarakat" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-md-4">NIK</label>
                                            <div class="col-md-8">
                                                <input type="number" name="nik" class="form-control"
                                                    placeholder="Masukan NIK" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4">Nama Lengkap</label>
                                            <div class="col-md-8">
                                                <input type="text" name="nama" class="form-control"
                                                    placeholder="Masukan Nama Lengkap" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4">Username</label>
                                            <div class="col-md-8">
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="Masukan Usernames" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4">Password</label>
                                            <div class="col-md-8">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Masukan Password" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-4">Telp</label>
                                            <div class="col-md-8">
                                                <input type="number" name="telp" class="form-control"
                                                    placeholder="Masukan Telp" required>
                                            </div>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="btnTambahMasyarakat"
                                        class="btn btn-primary">Tambah Data</button>
                                </div>
                                </form>

                                <?php
                                include '../config/koneksi.php';    
                                if (isset($_POST['btnTambahMasyarakat'])) {
                                    $nik = $_POST['nik'];
                                    $nama = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);
                                    $telp = $_POST['telp'];
                                    $level = 'masyarakat';

                                    $query_masyarakat = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik', '$nama', '$username', '$password', '$telp', '$level') ");

                                    if ($query_masyarakat) {
                                        header('location:index.php?page=masyarakat');
                                    }
                                }  
                                ?>
                            </div>
                        </div>
                    </div>


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
                            $echo_query = mysqli_query($koneksi,"SELECT * FROM masyarakat");
                            while ($data = mysqli_fetch_array($echo_query)) { ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nik']?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['telp'] ?></td>

                                <td>
                                    <a href="" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapus<?php echo $data['nik']?>">HAPUS</a>
                                    <!-- Modal hapus -->
                                    <div class="modal fade" id="hapus<?php echo $data['nik']?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus
                                                        Data Masyarakat <?php echo $data['nik'] ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="edit_data.php" method="POST">
                                                        <input type="hidden" name="nik" class="form-control"
                                                            value="<?php echo $data['nik'] ?>">
                                                        <p>Apakah yakin akan menghapus data
                                                            <br><?php echo $data['nama'] ?>?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" name="hapus_masyarakat"
                                                        class="btn btn-danger">Hapus</button>
                                                </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>