<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
<style>
    #other-text {
    display: none;
}
</style>
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
            <h3 class="card-title">Tambah Data Surat Keluar</h3>
          </div>
            <div class="card-body">
              <form class="form-horizontal" role="form" action="<?= site_url('suratkeluar/save_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama OPD</label>
                      <div class="col-sm-10">
                        <select class="form-control select2" name="id_opd" style="width: 100%;">
                            <?php foreach($opd as $row_opd){?>
                            <option value="<?= $row_opd->id_opd;?>"><?= $row_opd->nama_opd;?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tanggal</label>
                      <div class="col-sm-10">
                      <input type="date" class="form-control" name="tgl_surat" placeholder="Tanggal Surat" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pelaksana</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_pelaksana" placeholder="Pelaksana" required>
                      </div>
                  </div>
                  <!-- <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Penanggung Jawab</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="penangung_jawab" placeholder="Penanggung Jawab" required>
                      </div>
                  </div> -->
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kegiatan</label>
                    <div class="col-sm-10">
                        <select class="select2" name="jenis_kegiatan[]" multiple="multiple" data-placeholder="Pilih Kegiatan" style="width: 100%;">
                        <?php foreach($ket_kegiatan as $row_keg){?>
                            <option value="<?= $row_keg->id_keg;?>"><?= $row_keg->nama_keg;?></option>
                            <?php } ?>
                        </select>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                        <div class="col-sm-10">
                        <label>1. Check Link Fiber Optic / Wireless Status</label>
                        <select class="form-control select2" name="check_fiber" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Intermittent">Intermittent</option>
                            <option value="Latency ms to Gateway">Latency ms to Gateway</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>2. Check Main Router / Router Status</label>
                        <select class="form-control select2" name="check_router" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Intermittent">Intermittent</option>
                        </select>
                        <label>Catatan</label>
                        <input type="text" class="form-control" name="note_router" placeholder="Catatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>3. Check Bandwidth Limiter</label> 
                        <select class="form-control select2" name="check_bandwidth" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Problem">Problem</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>4. Check Firewall (Network Management System)</label> 
                        <select class="form-control select2" name="check_firewall" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Problem">Problem</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>5. Check Hostpot</label> 
                        <select class="form-control select2" name="check_hotspot" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Problem">Problem</option>
                        </select>
                        <label>Catatan NMS</label>
                        <input type="text" class="form-control" name="note_nms" placeholder="Catatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>6. Check Finger Status</label>
                        <select class="form-control select2" name="check_finger" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Problem">Problem</option>
                        </select>
                        <label>Catatan</label>
                        <input type="text" class="form-control" name="note_finger" placeholder="Catatan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <label>7. Check Wireless (Wifi Area)</label>
                        <select class="form-control select2" name="checkfiber" style="width: 100%;">
                            <option value="Normal">Normal</option>
                            <option value="Problem">Problem</option>
                        </select>
                        <label>Catatan</label>
                        <input type="text" class="form-control" name="catatan_router" placeholder="Catatan">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alat yang dibawa</label>
                    <div class="col-sm-10">
                        <select class="select2" multiple="multiple" name="jenis_alat[]" data-placeholder="Pilih Alat" style="width: 100%;">
                        <?php foreach($tools as $row_tools){?>
                            <option value="<?= $row_tools->id_jenisalat;?>"><?= $row_tools->nama_jenisalat;?></option>
                            <?php } ?>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="jml_konektor" placeholder="Jumlah Konektor" required>
                        </div>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="jml_utp" placeholder="Panjang Utp" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kegiatan Lainnya</label>
                        <div class="col-md-10">
                            <div class="card card-primary card-outline">
                                <div class="form-group">
                                    <textarea id="compose-textarea" name="note_tambahan" class="form-control" style="height: 300px">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-default float-right">Reset</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
  <script>
        $(".kegiatan").change(function () {
            //check if its checked. If checked move inside and check for others value
            if (this.checked && this.value === "Lainnya") {
                //add a text box next to it
                $("#other-text").show()
            } else {
                //remove if unchecked
                $("#other-text").hide();
            }
        });
  </script>
</body>
</html>
