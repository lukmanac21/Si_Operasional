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
            <h3 class="card-title">Tambah Nota Pencairan Dana</h3>
          </div>
            <div class="card-body">
              <form class="form-horizontal" role="form" action="<?= site_url('pencairandana/save_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Periode</label>
                      <div class="col-sm-11">
                      <select class="form-control select2" name="id_periode" >
                      <?php foreach($periode as $row_periode){ ?>
                      <option value="<?= $row_periode->id_periode?>"><?=$row_periode->tgl_mulai." - ". $row_periode->tgl_akhir?></option>
                        <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Judul</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="judul_npd" placeholder="Judul Pencairan Dana" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Tanggal Pencairan</label>
                      <div class="col-sm-11">
                      <input type="date" class="form-control" name="tgl_npd" placeholder="Tanggal Pencairan Dana" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">No Surat</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="nosurat_npd" placeholder="No Surat" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Dari</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="dari_npd" placeholder="Dari Pencairan Dana" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Kepada</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="kepada_npd" placeholder="Tujuan Pencairan Dana" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Perihal</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="perihal_npd" placeholder="Perihal Pencairan Dana" required>
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
