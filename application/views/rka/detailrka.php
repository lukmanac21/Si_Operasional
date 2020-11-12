<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php $this->load->view('_partials/navbar'); ?>
        <?php $this->load->view('_partials/sidebar'); ?>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Detail Operasional RKA</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url(); ?>RKA/add_detail';">Tambah</button>
                                <br>
                                <br>
                                <thead>
                                    <tr>
                                        <th>Kode Rekening</th>
                                        <th>Uraian Rekening</th>
                                        <th>Keterangan</th>
                                        <th>Satuan</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th style="text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($detail_rka as $row_detail_rka) { ?>

                                        <tr>
                                            <td><?= $row_detail_rka->kode_rekening; ?></td>
                                            <td><?= $row_detail_rka->uraian_rekening; ?></td>
                                            <td><?= $row_detail_rka->keterangan; ?></td>
                                            <td><?= $row_detail_rka->nama_satuan; ?></td>
                                            <td><?= $row_detail_rka->jumlah; ?></td>
                                            <td><?= number_format($row_detail_rka->harga, 2, ',', '.'); ?></td>
                                            <td><?= number_format($row_detail_rka->sub_total_detail, 2, ',', '.'); ?></td>
                                            <td style="text-align:center;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="<?= site_url('rka/edit_detail/') . $row_detail_rka->id; ?>" class="dropdown-item"> Ubah</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete<?= $row_detail_rka->id ?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> <?php } ?> </tbody>
                            </table>
                        </div>
                    </div>
            </section> <?php foreach ($detail_rka as $row_detail_rka) { ?> <div class="modal fade" id="delete<?= $row_detail_rka->id ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hapus Data</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= site_url('rka/delete_detail'); ?>">
                                <div class="modal-body">
                                    <p>Hapus data <?= $row_detail_rka->kode_rekening . " senilai " . $row_detail_rka->sub_total_detail; ?> ? </p>
                                    <input type="hidden" name="id" value="<?= $row_detail_rka->id; ?>">
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <?php $this->load->view('_partials/footer'); ?>
</body>

</html>