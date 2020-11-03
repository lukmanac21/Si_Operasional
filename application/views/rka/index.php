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
            <h3 class="card-title">Data Master rka</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/rka/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Kode rka</th>
                <th>Uraian rka</th>
                <th style="text-align:center;">Ubah</th>
                <th style="text-align:center;">Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($rka as $row_rka){?>
                    <tr>
                        <td><?= $row_rka->kode_rka;?></td>
                        <td><?= $row_rka->uraian_rka;?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('rka/edit_data/').$row_rka->id_rka ;?>" class="btn btn-info" > Ubah</a</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $row_rka->id_rka?>"> Hapus</button</td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    <?php foreach($rka as $row_rka){?>
    <div class="modal fade" id="delete<?= $row_rka->id_rka?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('rka/delete_data');?>">
          <div class="modal-body">
            <p>Hapus data rka <?= $row_rka->uraian_rka?> ? </p>
            <input type="hidden" name="id_rka" value="<?= $row_rka->id_rka ;?>">
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
            <h3 class="card-title">Data Master rka</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/RKA/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Nama</th>
                <th>Pagu</th>
                <th>Total</th>
                <th>Sisa</th>
                <th style="text-align:center;">Aksi</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($rka as $row_rka)
                {
                    $sisa = $row_rka->pagu - $row_rka->total ;?>

                    <tr>
                        <td><?= $row_rka->nama_rka;?></td>
                        <td><?= number_format($row_rka->pagu,2,',','.');?></td>
                        <td><?= number_format($row_rka->total,2,',','.');?></td>
                        <td><?= number_format($sisa,2,',','.');?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('rka/detail_data/').$row_rka->id_rka ;?>" class="btn btn-warning" > Detail</a>
                        <a style="color:white;" type="button" href="<?= site_url('rka/edit_data/').$row_rka->id_rka ;?>" class="btn btn-info" > Ubah</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $row_rka->id_rka?>"> Hapus</button</td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    <?php foreach($rka as $row_rka){?>
    <div class="modal fade" id="delete<?= $row_rka->id_rka?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('rka/delete_data');?>">
          <div class="modal-body">
            <p>Hapus data rka <?= $row_rka->uraian_rka?> ? </p>
            <input type="hidden" name="id_rka" value="<?= $row_rka->id_rka ;?>">
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
