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
            <form class="form-horizontal" role="form" action="<?= site_url('pencairandana/save_data_detail');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Rekening Induk</label>
                      <div class="col-sm-11">
                      <select class="form-control select2" name="id_rekening" >
                      <?php foreach($rekening as $row_rekening){ ?>
                      <option value="<?= $row_rekening->id_rekening?>"><?= $row_rekening->kode_rekening . " " . $row_rekening->uraian_rekening?></option>
                        <?php } ?>
                        </select>
                        <?php foreach($npd as $row_npd){?>
                        <input type="hidden" name="id_npd" value="<?= $row_npd->id_npd?>"></input>
                        <?php }?>
                      </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer" style="margin-bottom:15px;">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                  <!-- /.card-footer -->
              </form>
            <div class="card">
                <div class="card-header">
                  <table cellspacing="0" cellpadding="0">
                    <?php foreach($npd as $row_npd){?>
                      <tbody>
                      <tr><td>Judul </td><td> &nbsp; :</td><td> &nbsp; <?= $row_npd->judul_npd?></td></tr>
                      <tr><td>No Surat </td><td> &nbsp; :</td><td> &nbsp; <?= $row_npd->nosurat_npd?></td></tr>
                      <tr><td>Dari</td><td> &nbsp; :</td><td> &nbsp; <?= $row_npd->dari_npd?></td></tr>
                      <tr><td>Kepada</td><td> &nbsp; :</td><td> &nbsp; <?= $row_npd->kepada_npd?></td></tr>
                      <tr><td>Perihal</td><td> &nbsp; :</td><td> &nbsp; <?= $row_npd->perihal_npd?></td></tr>
                      <?php } ?>
                    </tbody>                  
                </table>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <br>
              <thead>
              <tr>
                <th>Kode</th>
                <th>Uraian</th>
                <th>Anggaran</th>
                <th>Realisasi Sebelumnya</th>
                <th>Sisa Anggaran</th>
                <th>Panjar Yang Diminta</th>
                <th style="text-align:center;">Detail</th>
                <th style="text-align:center;">Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php
                 foreach($npd_detail as $row_npd_detail){?>
                
                    <tr>
                        <td><?= $row_npd_detail->kode_rekening;?></td>
                        <td><?= $row_npd_detail->uraian_rekening;?></td>
                        <td><?= $row_npd_detail->anggaran;?></td>
                        <td><?= $row_npd_detail->realisasi_seb;?></td>
                        <td><?= $row_npd_detail->sisa_anggaran;?></td>
                        <td><?= $row_npd_detail->panjar_ygdmt;?></td>
                        <?php foreach($npd as $row_npd){?>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('Pencairandana/add_data_detail_sub/').$row_npd->id_periode.'/'.$row_npd_detail->id_npd_detail.'/'.$row_npd_detail->id_rekening ;?>" class="btn btn-success" > Detail</a</td>
                        <td style="text-align:center;"><a style="color:white;" type="button" data-toggle="modal" data-target="#delete<?= $row_npd_detail->id_npd_detail?>" class="btn btn-danger" > Hapus</a</td>
                        <?php }?>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
                </div>
            </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <?php foreach($npd_detail as $row_npd_detail){?>
    <div class="modal fade" id="delete<?= $row_npd_detail->id_npd_detail?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('Pencairandana/delete_data_detail');?>">
          <div class="modal-body">
            <p>Hapus data <?= $row_npd_detail->uraian_rekening ?>? </p>
            <?php foreach($npd as $row_npd){?>
            <input type="hidden" name="id_npd" value="<?= $row_npd->id_npd?>"></input>
            <?php }?>
            <input type="hidden" name="id_npd_detail" value="<?= $row_npd_detail->id_npd_detail ;?>">
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
    <!-- /.content -->
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
