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
            <h3 class="card-title">Data Master Anggaran</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/anggaran/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Tanggal Periode</th>
                <th>Uraian Rekening</th>
                <th>Anggaran</th>
                <th style="text-align:center;">Ubah</th>
                <th style="text-align:center;">Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($anggaran as $row_anggaran){?>
                    <tr>
                        <td><?= $row_anggaran->tgl_mulai. " - " .$row_anggaran->tgl_akhir ;?></td>
                        <td><?= $row_anggaran->uraian_rekening. " " .$row_anggaran->uraian_sub_rek;?></td>
                        <td><?= $row_anggaran->anggaran;?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('anggaran/edit_data/').$row_anggaran->id_anggaran ;?>" class="btn btn-info" > Ubah</a</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $row_anggaran->id_anggaran?>"> Hapus</button</td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    <?php foreach($anggaran as $row_anggaran){?>
    <div class="modal fade" id="delete<?= $row_anggaran->id_anggaran?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('anggaran/delete_data');?>">
          <div class="modal-body">
            <p>Hapus data anggaran <?= $row_anggaran->uraian_rekening . " " .$row_anggaran->uraian_sub_rek." senilai ".$row_anggaran->anggaran;?> ? </p>
            <input type="hidden" name="id_anggaran" value="<?= $row_anggaran->id_anggaran ;?>">
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
