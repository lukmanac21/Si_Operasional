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
            <h3 class="card-title">Data Operasional Nota Pencarian Dana</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/pencairandana/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Judul</th>
                <th>No Surat</th>
                <th>Tanggal</th>
                <th>Dari</th>
                <th>Kepada</th>
                <th>Perihal</th>
                <th style="text-align:center;">Detail</th>
                <th style="text-align:center;">Ubah</th>
                <th style="text-align:center;">Cetak</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($npd as $row_npd){?>
                    <tr>
                        <td><?= $row_npd->judul_npd;?></td>
                        <td><?= $row_npd->nosurat_npd;?></td>
                        <td><?= $row_npd->tgl_npd;?></td>
                        <td><?= $row_npd->dari_npd;?></td>
                        <td><?= $row_npd->kepada_npd;?></td>
                        <td><?= $row_npd->perihal_npd;?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('Pencairandana/add_data_detail/').$row_npd->id_npd ;?>" class="btn btn-success" > Detail</a</td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('Pencairandana/edit_data/').$row_npd->id_npd ;?>" class="btn btn-info" > Ubah</a</td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('Pencairandana/cetak_data/').$row_npd->id_npd ;?>" class="btn btn-danger" > Cetak</a</td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
