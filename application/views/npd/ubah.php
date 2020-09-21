<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('_partials/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('_partials/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Nota Pencairan Dana</h3>
          </div>
            <div class="card-body">
            <?php foreach($npd as $row_npd){?>
              <form class="form-horizontal" role="form" action="<?= site_url('pencairandana/update_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Judul</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="judul_npd" placeholder="Judul Pencairan Dana" value="<?= $row_npd->judul_npd?>" required>
                      <input type="hidden" class="form-control" name="id_npd" value="<?= $row_npd->id_npd?>">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Tanggal Pencairan</label>
                      <div class="col-sm-11">
                      <input type="date" class="form-control" name="tgl_npd" placeholder="Tanggal Pencairan Dana" value="<?= $row_npd->tgl_npd?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">No Surat</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="nosurat_npd" placeholder="No Surat" value="<?= $row_npd->nosurat_npd?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Dari</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="dari_npd" placeholder="Dari Pencairan Dana" value="<?= $row_npd->dari_npd?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Kepada</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="kepada_npd" placeholder="Tujuan Pencairan Dana" value="<?= $row_npd->kepada_npd?>" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Perihal</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="perihal_npd" placeholder="Perihal Pencairan Dana" value="<?= $row_npd->perihal_npd?>" required>
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
            <?PHP } ?>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
