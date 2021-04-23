<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            <a href="<?= base_url('tambah-mahasiswa-prodi') ?>"
                                class="badge progress-bar-primary">Tambah
                                Data</a>
                            <br>
                            <center>
                                <h3 class="box-title" id="judul">Daftar nama-nama Mahasiswa
                                    <?php echo $user_prodi['nama_prodi']; ?></h3>
                            </center>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <?= $this->session->flashdata('message1'); ?>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>NPM</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Prodi</th>
                                            <th>Fakultas</th>
                                            <th>Status</th>
                                            <th>Akun</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //var_dump($all_mhsin); 
                                        ?>
                                        <?php
                                        $no = 0;
                                        foreach ($mahasiswa_prodi as $mhs) :
                                            $no++ ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><img src="<?= base_url('assets/'); ?>img/users/default.png"
                                                    class="img-rounded" width="40" height="40">
                                            </td>
                                            <td><?= $mhs->NPM; ?></td>
                                            <td><?= $mhs->nama_mahasiswa; ?></td>
                                            <td><?= $mhs->alamat_mahasiswa; ?></td>
                                            <td><?= $mhs->nama_prodi; ?></td>
                                            <td><?= $mhs->nama_fakultas; ?></td>
                                            <td><?php if ($mhs->status == '1') {
                                                        echo 'Aktif';
                                                    } else {
                                                        echo 'Tidak Aktif';
                                                    } ?>
                                            </td>
                                            <td><?php if ($mhs->username == null) { ?>
                                                <i class="fa fa-fw fa-close" style="color: red;"></i>
                                                <?php } else { ?>
                                                <i class="fa fa-fw fa-check" style="color: green;"></i>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('edit-mahasiswa-prodi/' . $mhs->NPM) ?>"
                                                    class="badge progress-bar-primary">Edit</a>
                                                <a href="<?= base_url('mahasiswa/Mahasiswa/delete_mahasiswa_prodi/' . $mhs->NPM); ?>"
                                                    class="badge progress-bar-danger"
                                                    onclick="return confirm('Yakin..?');">Hapus</a>
                                                <?php if ($mhs->username == null) { ?>
                                                <a href="<?= base_url('tambah-akun-mahasiswa-prodi/' . $mhs->NPM) ?>"
                                                    class="badge progress-bar-success">Buat akun</a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>