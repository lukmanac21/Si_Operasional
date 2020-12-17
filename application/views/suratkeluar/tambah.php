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
              <form class="form-horizontal" role="form" action="<?= site_url('Submenu/save_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama OPD</label>
                      <div class="col-sm-11">
                      <select class="form-control select2" name="id_opd" style="width: 100%;">
                            <?php foreach($opd as $row_opd){?>
                            <option value="<?= $row_opd->id_opd;?>"><?= $row_opd->nama_opd;?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Tanggal</label>
                      <div class="col-sm-11">
                      <input type="date" class="form-control" name="tgl_surat" placeholder="Tanggal Surat" required>
                      </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Kegiatan</label>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="survey" value="Survey">
                            <label for="survey" class="custom-control-label">Survey</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="instalasi" value="Instalasi">
                            <label for="instalasi" class="custom-control-label">Instalasi</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="maintenance" value="Maintenance">
                            <label for="maintenance" class="custom-control-label">Maintenance</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="trouble" value="Trouble Shooting">
                            <label for="trouble" class="custom-control-label">Trouble Shooting</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="lainnya" value="Lainnya">
                            <label for="lainnya" class="custom-control-label">Lainnya</label>
                            <input id='other-text' placeholder='Masukan Kegiatan' type='text' class="custom-control-label" />
                        </div>
                    </div>
                  </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Ket Kegiatan</label>
                        <label class="col-sm-11 col-form-label">1. Check Link Fiber Optic / Wireless Status</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label> 
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg1opt1" name="keg1">
                                <label for="keg1opt1" class="custom-control-label">Normal</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg1opt2" name="keg1">
                                <label for="keg1opt2" class="custom-control-label">Intermittent</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg1opt3" name="keg1">
                                <label for="keg1opt3" class="custom-control-label">Latency ms to Gateway</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label>
                        <label class="col-sm-11 col-form-label">2. Check Main Router / Router Status</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label> 
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg2opt1" name="keg2">
                                <label for="keg2opt1" class="custom-control-label">Normal</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg2opt2" name="keg2">
                                <label for="keg2opt2" class="custom-control-label">Problem</label>
                            </div>
                        </div>
                        <label class="col-sm-0.5 col-form-label">Note</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="catatan_router" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label>
                        <label class="col-sm-11 col-form-label">3. Check NMS (Network Management System)</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label> 
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg3opt1" name="keg3">
                                <label for="keg3opt1" class="custom-control-label">Normal</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg3opt2" name="keg3">
                                <label for="keg3opt2" class="custom-control-label">Problem</label>
                            </div>
                        </div>
                        <label class="col-sm-0.5 col-form-label">Note</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="catatan_nms" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label>
                        <label class="col-sm-11 col-form-label">4. Check Finger Status</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label> 
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg4opt1" name="keg4">
                                <label for="keg4opt1" class="custom-control-label">Normal</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg4opt2" name="keg4">
                                <label for="keg4opt2" class="custom-control-label">Problem</label>
                            </div>
                        </div>
                        <label class="col-sm-0.5 col-form-label">Note</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="catatan_finger" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label>
                        <label class="col-sm-11 col-form-label">5. Check Wireless (Wifi Area)</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label"></label> 
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg5opt1" name="keg5">
                                <label for="keg5opt1" class="custom-control-label">Normal</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="keg5opt2" name="keg5">
                                <label for="keg5opt2" class="custom-control-label">Problem</label>
                            </div>
                        </div>
                        <label class="col-sm-0.5 col-form-label">Note</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="catatan_wifi" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label">Alat yang dibawa</label>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="lantester" value="Lan Tester">
                                <label for="lantester" class="custom-control-label">Lan Tester</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="obengplus" value="Obeng +">
                                <label for="obengplus" class="custom-control-label">Obeng +</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="obengmin" value="Obeng -">
                                <label for="obengmin" class="custom-control-label">Obeng -</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="obengset" value="Obeng set">
                                <label for="obengset" class="custom-control-label">Obeng Set</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="tangpotong" value="Tang Potong">
                                <label for="tangpotong" class="custom-control-label">Tang Potong</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="tangbiasa" value="Tang Biasa">
                                <label for="tangbiasa" class="custom-control-label">Tang Biasa</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="tangcucut" value="Tang Cucut">
                                <label for="tangcucut" class="custom-control-label">Tang Cucut</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input kegiatan" name="kegiatan" type="checkbox" id="tangkrimping" value="Tang Krimping">
                                <label for="tangkrimping" class="custom-control-label">Tang Krimping</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="jumlahkonektor" placeholder="Jumlah Konektor" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="panjangutp" placeholder="Panjang Utp" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="lain-lain" placeholder="Lain - Lain" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-sm-1 col-form-label">Kegiatan Lainnya</label>
                        <div class="col-md-9">
                            <div class="card card-primary card-outline">
                                <div class="form-group">
                                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
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
