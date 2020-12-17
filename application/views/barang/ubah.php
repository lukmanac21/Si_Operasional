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
                            <h3 class="card-title">Ubah Data Pencatatan Barang</h3>
                        </div>
                        <div class="card-body">
                            <?php foreach ($barang as $row_barang) { ?>
                                <form class="form-horizontal" role="form" action="<?= site_url('barang/update_data'); ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_barang" value="<?= $row_barang->id_barang; ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_jenis">Jenis Barang</label>
                                                    <select name="id_jenis" id="id_jenis" class="form-control select2">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_barang">Nama Barang</label>
                                                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?= $row_barang->nama_barang; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_kegiatan">Kegiatan</label>
                                                    <select name="id_kegiatan" id="id_kegiatan" class="form-control select2">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="id_satuan">Satuan</label>
                                                    <select name="id_satuan" id="id_satuan" class="form-control select2">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_barang">Tanggal Barang</label>
                                                    <input type="date" value="<?= $row_barang->tgl_barang; ?>" name="tgl_barang" id="tgl_barang" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="model_barang">Model Barang</label>
                                                    <input type="text" name="model_barang" id="model_barang" class="form-control" value="<?= $row_barang->model_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="upc_barang">UPC Barang</label>
                                                    <input type="text" name="upc_barang" id="upc_barang" class="form-control" value="<?= $row_barang->upc_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="hwversi_barang">H/W Versi Barang</label>
                                                    <input type="text" name="hwversi_barang" id="hwversi_barang" class="form-control" value="<?= $row_barang->hwversi_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cmiit_barang">CMIIT Barang</label>
                                                    <input type="text" name="cmiit_barang" id="cmiit_barang" class="form-control" value="<?= $row_barang->cmiit_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kg_barang">K/G Barang</label>
                                                    <input type="text" name="kg_barang" id="kg_barang" class="form-control" value="<?= $row_barang->kg_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produk_barang">Produk Barang</label>
                                                    <input type="text" name="produk_barang" id="produk_barang" class="form-control" value="<?= $row_barang->produk_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tipe_barang">Tipe Barang</label>
                                                    <input type="text" name="tipe_barang" id="tipe_barang" class="form-control" value="<?= $row_barang->type_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="plug_barang">Plug Barang</label>
                                                    <input type="text" name="plug_barang" id="plug_barang" class="form-control" value="<?= $row_barang->plug_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="power_barang">Power Barang</label>
                                                    <input type="text" name="power_barang" id="power_barang" class="form-control" value="<?= $row_barang->power_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mac_barang">Mac Barang</label>
                                                    <input type="text" name="mac_barang" id="mac_barang" class="form-control" value="<?= $row_barang->mac_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="seri_barang">Seri Barang</label>
                                                    <input type="text" name="seri_barang" id="seri_barang" class="form-control" value="<?= $row_barang->seri_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="frek_barang">Frekuensi Barang</label>
                                                    <input type="text" name="frek_barang" id="frek_barang" class="form-control" value="<?= $row_barang->frek_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="harga_barang">Harga</label>
                                                    <input type="text" name="harga_barang" id="harga_barang" class="form-control" value="<?= $row_barang->harga_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fcc_barang">FCC Barang</label>
                                                    <input type="text" name="fcc_barang" id="fcc_barang" class="form-control" value="<?= $row_barang->fcc_barang; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gambar">Gambar</label>
                                                    <input type="file" name="file" id="gambar" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default float-right">Reset</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            <?php } ?>
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
</body>

</html>