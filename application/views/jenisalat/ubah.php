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
            <h3 class="card-title">Ubah Data Master JEnis Alat</h3>
          </div>
            <div class="card-body">
            <?php foreach($jenisalat as $row_jenisalat){?>
              <form class="form-horizontal" role="form" action="<?= site_url('jenisalat/update_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama Jenis Alat</label>
                      <div class="col-sm-11">
                      <input type="hidden" class="form-control" name="id_jenisalat" value="<?= $row_jenisalat->id_jenisalat;?>">
                      <input type="text" class="form-control" name="nama_jenisalat" placeholder="nama jenisalat" required value="<?= $row_jenisalat->nama_jenisalat;?>">
                      </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <button type="reset" class="btn btn-default float-right">Reset</button>
                  </div>
                  <!-- /.card-footer -->
              </form>
            <?php } ?>
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