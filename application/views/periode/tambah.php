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
            <h3 class="card-title">Tambah Data Master periode</h3>
          </div>
            <div class="card-body">
              <form class="form-horizontal" role="form" action="<?= site_url('periode/save_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Tanggal Mulai</label>
                      <div class="col-sm-11">
                      <input type="date" class="form-control" name="tgl_mulai" placeholder="Tanggal Mulai" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Tanggal Akhir</label>
                      <div class="col-sm-11">
                      <input type="date" class="form-control" name="tgl_akhir" placeholder="Tanggal Selesai" required>
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
