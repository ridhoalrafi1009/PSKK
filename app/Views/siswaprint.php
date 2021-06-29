<?= $this->extend('layout/template_header'); ?>

<?= $this->section('content_auth'); ?>
<div id="wrapper">



    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <center>Status Penerimaan SMA Negeri 1 Padang</center>
            </h1>

        </div>

        <!-- Content Row -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <table class="table table-bordered" border="1" cellpadding="10">
                        <tr>

                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Status Pendaftaran</th>
                        </tr>
                        <?php
                        ?>
                        <tr>
                            <td><?= session()->get('name'); ?></td>
                            <td><?php echo $nisn['nisn']; ?></td>
                            <td><?php echo $alamat['alamat']; ?></td>
                            <td><?php echo $tgl['tgl']; ?></td>
                            <td><?php echo $jeniskelamin['jeniskelamin']; ?></td>
                            <td><?php echo $agama['agama']; ?></td>
                            <td><?php echo $status['status_pendaftaran']; ?></td>
                        </tr>
                        <?php  ?>

                    </table>
                </div>
            </div>
        </div>





        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->


    <?= $this->endSection(); ?>