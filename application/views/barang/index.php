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
                            <h3 class="card-title">Data Pencatatan Barang</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url(); ?>/barang/add_data';">Tambah</button>
                                <button type="button" class="btn btn-success" style="margin-left:10px; padding-left:10px;" onclick="window.location.href='<?= site_url(); ?>/barang/print_excel';">Excel</button>
                                <br>
                                <br>
                                <thead>
                                    <tr>
                                        <th>Jenis Barang</th>
                                        <th>Tanggal Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th style="text-align:center;">Gambar Barang</th>
                                        <th style="text-align:center;">Ubah</th>
                                        <th style="text-align:center;">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $row_barang) { ?>
                                        <tr>
                                            <td><?= $row_barang->nama_jenis ?></td>
                                            <td><?= date("d F Y", strtotime($row_barang->tgl_barang)) ?></td>
                                            <td><?= $row_barang->nama_barang ?></td>
                                            <td><?= $row_barang->harga_barang ?></td>
                                            <td style="text-align:center;"> <a data-toggle="modal" data-target="#detail<?=$row_barang->id_barang;?>" class="btn btn-warning btn-sm"> Detail Foto</a></td>
                                            <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('barang/edit_data/') . $row_barang->id_barang; ?>" class="btn btn-info"> Ubah</a</td> <td style="text-align:center;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $row_barang->id_barang ?>"> Hapus</button</td> </tr> <?php } ?> </tbody> </table> </div> </div> </section> <?php foreach ($barang as $row_barang) { ?> <div class="modal fade" id="delete<?= $row_barang->id_barang ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Data</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form method="post" action="<?= site_url('barang/delete_data'); ?>">
                                                                    <div class="modal-body">
                                                                        <p>Hapus data barang <?= $row_barang->uraian_rekening . " " . $row_barang->uraian_sub_rek . " senilai " . $row_barang->barang; ?> ? </p>
                                                                        <input type="hidden" name="id_barang" value="<?= $row_barang->id_barang; ?>">
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


                    <!-- Modal -->
                    <?php foreach ($barang as $row_barang) { ?>
                <div class="modal fade" id="detail<?php echo $row_barang->id_barang;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form class="form-horizontal">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Data Gambar</h4>
                                            </div>
                                            <div class="modal-body">
                                               <img src="<?= base_url ()?>assets/img/barang/<?php  echo $row_barang->img_barang;?>" width="100%" class="img-thumbnail">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                <?php } ?>
</body>

</html>