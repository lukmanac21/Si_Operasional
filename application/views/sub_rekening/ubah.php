<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php $this->load->view('_partials/navbar');?>
  <?php $this->load->view('_partials/sidebar');?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Master Sub rekening</h3>
          </div>
            <div class="card-body">
            <?php foreach($sub_rekening as $row_sub_rekening){?>
              <form class="form-horizontal" role="form" action="<?= site_url('rekeningsub/update_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama rekening</label>
                      <div class="col-sm-11">
                      <select class="form-control select2" name="id_rekening" style="width: 100%;">
                            <?php foreach($rekening as $row_rekening){?>
                            <option value="<?= $row_rekening->id_rekening;?>"<?php if ($row_sub_rekening->id_rekening == $row_rekening->id_rekening) echo "selected = 'selected'"?>><?= $row_rekening->kode_rekening." ".$row_rekening->uraian_rekening;?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama Sub rekening</label>
                      <div class="col-sm-11">
                      <input type="text" class="form-control" name="uraian_sub_rek" placeholder="Nama Sub rekening" value="<?= $row_sub_rekening->uraian_sub_rek;?>" required >
                      <input type="hidden" class="form-control" name="id_sub_rek" value="<?= $row_sub_rekening->id_sub_rek;?>" >
                      </div>
                  </div>
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-default float-right">Reset</button>
                  </div>
              </form>
            <?php } ?>
            </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
