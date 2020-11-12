<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('_partials/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('_partials/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Detail RKA</h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form" action="<?= site_url('RKA/save_detail'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group ">
                                            <label>Nama RKA</label>
                                            <?php foreach ($rka as $row_rka) { ?>
                                            <input class="form-control" type="text" value="<?= $row_rka->nama_rka; ?>" readonly>
                                            <input class="form-control" type="hidden" name="id_rka" value="<?= $row_rka->id_rka; ?>" readonly>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Rekening</label>
                                            <select class="form-control select2" name="id_rekening">
                                                <?php foreach ($rekening as $row_rekening) { ?>
                                                    <option value="<?= $row_rekening->id_rekening; ?>"><?= $row_rekening->uraian_rekening; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label>Keterangan Belanja</label>
                                            <input class="form-control" type="text" name="keterangan">
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <select class="form-control select2" name="id_satuan">
                                                <?php foreach ($satuan as $row_satuan) { ?>
                                                    <option value="<?= $row_satuan->id_satuan; ?>"><?= $row_satuan->nama_satuan; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label>Harga Satuan</label>
                                            <input class="form-control" type="number" id="harga" name="harga">
                                        </div>
                                        <div class="form-group ">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" id="jumlah" name="jumlah">
                                        </div>
                                        <div class="form-group ">
                                            <label>Total</label>
                                            <input class="form-control" type="number" id="sub_total" name="sub_total" readonly>
                                        </div>
                                    </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-default float-right">Reset</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                </div>
                <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
        <?php $this->load->view('_partials/footer'); ?>
        <script>
            $(document).ready(function() {
                $("#harga").on("input", function() {
                    var harga = $(this).val()
                    $('input#sub_total').val(harga)
                })
                $("#jumlah").on("input", function() {
                    var harga = $('#harga').val()
                    var jumlah = $(this).val()
                    var subtotal = harga * jumlah
                    $('input#sub_total').val(subtotal)
                })
            })
        </script>
</body>

</html>