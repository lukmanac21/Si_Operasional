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
            <h3 class="card-title">Data Master kegiatan</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/kegiatan/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Nama kegiatan</th>
                <th>Icon kegiatan</th>
                <th style="text-align:center;">Ubah</th>
                <th style="text-align:center;">Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($kegiatan as $row_kegiatan){?>
                    <tr>
                        <td><?= $row_kegiatan->kode_kegiatan;?></td>
                        <td><?= $row_kegiatan->nama_kegiatan;?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('kegiatan/edit_data/').$row_kegiatan->id_kegiatan ;?>" class="btn btn-info" > Ubah</a</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $row_kegiatan->id_kegiatan?>"> Hapus</button</td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    <?php foreach($kegiatan as $row_kegiatan){?>
    <div class="modal fade" id="delete<?= $row_kegiatan->id_kegiatan?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('kegiatan/delete_data');?>">
          <div class="modal-body">
            <p>Hapus data kegiatan <?= $row_kegiatan->nama_kegiatan?> ? </p>
            <input type="hidden" name="id_kegiatan" value="<?= $row_kegiatan->id_kegiatan ;?>">
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
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
