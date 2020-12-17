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
            <h3 class="card-title">Ubah Data Master Anggaran</h3>
          </div>
            <div class="card-body">
            <?php foreach($anggaran as $row_anggaran){?>
              <form class="form-horizontal" role="form" action="<?= site_url('anggaran/update_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-form-label">Periode</label>
                      <select class="form-control select2" name="id_periode" >
                      <?php foreach($periode as $row_periode){ ?>
                      <option value="<?= $row_periode->id_periode?>"<?php if ($row_anggaran->id_periode == $row_periode->id_periode) echo 'selected="selected"'?>><?=$row_periode->tgl_mulai." - ". $row_periode->tgl_akhir?></option>
                        <?php } ?>
                        </select>
                  </div>
                  <div class="form-group row">
                      <label class="col-form-label">Rekening Sub</label>
                      <select class="form-control select2" name="id_sub_rek" >
                      <?php foreach($sub_rek as $row_sub_rekening){ ?>
                      <option value="<?= $row_sub_rekening->id_sub_rek?>"<?php if ($row_anggaran->id_sub_rek == $row_sub_rekening->id_sub_rek) echo 'selected="selected"'?>><?=$row_sub_rekening->uraian_rekening." ". $row_sub_rekening->uraian_sub_rek?></option>
                        <?php } ?>
                        </select>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Anggaran</label>
                      <input type="number" class="form-control" name="anggaran" placeholder="Anggaran" value="<?= $row_anggaran->anggaran?>" required>
                      <input type="hidden" class="form-control" name="id_anggaran" value="<?= $row_anggaran->id_anggaran?>" required>
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
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
