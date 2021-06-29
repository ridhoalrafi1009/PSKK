<?= $this->extend('layout/template_header'); ?>

<?= $this->section('content_auth'); ?>
<div id="wrapper">



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <center>Daftar Nama Siswa SMA Negeri 1 Padang</center>
            </h1>

        </div>

        <!-- Content Row -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <table class="table table-bordered" border="1" cellpadding="10">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Status Pendaftaran</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($datasiswa as $da => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['nisn'] ?></td>
                                <td><?= $value['alamat'] ?></td>
                                <td><?= $value['tgl'] ?></td>
                                <td><?= $value['jeniskelamin'] ?></td>
                                <td><?= $value['agama'] ?></td>
                                <td><?= $value['status_pendaftaran'] ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>





        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->


    <?= $this->endSection(); ?>