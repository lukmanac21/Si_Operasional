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
            <h3 class="card-title">Tambah Detail Nota Pencairan Dana</h3>
          </div>
            <div class="card-body">
                <form class="form-horizontal" role="form" action="<?= site_url('pencairandana/save_data_detail_sub');?>" method="post">
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="rekeninginduk" class="col-form-label">Rekening Induk</label>
                            <?php foreach($rekening as $row_rek){ ?>
                            <input class="form-control" value="<?= $row_rek->uraian_rekening?>" readonly></input>
                            <input type="hidden" id="rekeninginduk" name="id_rekening" class="form-control" value="<?= $row_rek->id_rekening?>"></input>
                            <?php } ?>
                    </div>
                    <div class="form-group row">
                        <label for="rekening" class="col-form-label">Rekening Detail</label>
                        <select class="form-control select2" name="id_sub_rek" id="rekening">
                            <option>--Plilih Rekening--</option>
                            <?php foreach ($rek_sub as $row_rek_sub){
                            echo "<option value='".$row_rek_sub->id_sub_rek."'anggaran='".$row_rek_sub->anggaran."' >".$row_rek_sub->uraian_sub_rek."</option>";
                              } ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="anggaran" class="col-form-label">Anggaran</label>
                          <input type="text" class="form-control" name="anggaran"  id="anggaran" readonly>
                    </div>
                    <div class="form-group row">
                        <label for="realisasi" class="col-form-label">Realisasi Sebelumnya</label>
                            <input type="number" id="realisasi" name="realisasi_seb" class="form-control" readonly></input>
                    </div>
                    <div class="form-group row">
                        <label for="sisarealisasi" class="col-form-label">Sisa Anggaran</label>
                        <input id="sisarealisasi" type="number" name="sisa_anggaran" class="form-control" readonly></input>
                    </div>
                    <div class="form-group row">
                        <label for="panjar" class="col-form-label">Panjar Yang Diminta</label>
                            <input id="panjar" type="number" name="panjar_ygdmt" class="form-control"></input>
                    </div>
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer" style="margin-bottom:15px;">
                  <input type="hidden" name="id_npd_detail" value="<?= $id->id_npd_detail?>">
                  <input type="hidden" name="id_periode" value="<?= $periode->id_periode?>">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
                  <!-- /.card-footer -->
                <div class="card">
                <div class="card-header">          
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
                <th style="text-align:center;">Hapus</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                 $totalanggran = 0;
                 $totaleresseb = 0;
                 $totalsisang = 0;
                 $totalpnjr = 0; 
                 foreach($npd_detail_sub as $row_npd_detail_sub){
                  $totalanggran = $totalanggran + $row_npd_detail_sub->anggaran;
                  $totaleresseb = $totaleresseb + $row_npd_detail_sub->realisasi_seb;
                  $totalsisang = $totalsisang + $row_npd_detail_sub->sisa_anggaran;
                  $totalpnjr = $totalpnjr + $row_npd_detail_sub->panjar_ygdmt;?>
                
                    <tr>
                        <td><?= $row_npd_detail_sub->kode_rekening;?></td>
                        <td><?= $row_npd_detail_sub->uraian_rekening ." " .$row_npd_detail_sub->uraian_sub_rek ;?></td>
                        <td><?= "Rp. " . number_format($row_npd_detail_sub->anggaran,0,".",".");?></td>
                        <td><?= "Rp. " . number_format($row_npd_detail_sub->realisasi_seb,0,".",".");?></td>
                        <td><?= "Rp. " . number_format($row_npd_detail_sub->sisa_anggaran,0,".",".");?></td>
                        <td><?= "Rp. " . number_format($row_npd_detail_sub->panjar_ygdmt,0,".",".");?></td>
                        <td style="text-align:center;"><a style="color:white;" data-toggle="modal" data-target="#delete<?= $row_npd_detail_sub->id_npd_detail_sub?>" type="button" class="btn btn-danger" > Hapus</a</td>
                    </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th colspan="2">Total</th>
                      <th colspan="1"><?php echo "Rp. " . number_format($totalanggran,0,".","."); ?></th>
                      <th colspan="1"><?php echo "Rp. " . number_format($totaleresseb,0,".","."); ?></th>
                      <th colspan="1"><?php echo "Rp. " . number_format($totalsisang,0,".","."); ?></th>
                      <th colspan="1"><?php echo "Rp. " . number_format($totalpnjr,0,".","."); ?></th>
                      <th colspan="2"></td>
                  </tr>
                  <tr>
                  <th colspan="2">Terbilang</th>
                  <th colspan="7"><?= terbilang($totalpnjr) ." Rupiah";?></th>
                  </tr>
              </tfoot>
            </table>
                </div>
            </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <?php foreach($npd_detail_sub as $row_npd_detail_sub){?>
    <div class="modal fade" id="delete<?= $row_npd_detail_sub->id_npd_detail_sub?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="<?= site_url('Pencairandana/delete_data_detail_sub');?>">
          <div class="modal-body">
            <p>Hapus data rekening <?=  $row_npd_detail_sub->uraian_rekening ." ". $row_npd_detail_sub->uraian_sub_rek?> ? </p>
            <input type="hidden" name="id_npd_detail" value="<?= $id->id_npd_detail?>">
            <input type="hidden" name="id_periode" value="<?= $periode->id_periode?>">
            <input type="hidden" name="id_rekening" value="<?= $row_npd_detail_sub->id_rekening?>">
            <input type="hidden" name="id_npd_detail_sub" value="<?= $row_npd_detail_sub->id_npd_detail_sub ;?>">
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
