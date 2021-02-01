<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<table style="border-collapse:collapse;" border="0">
   <tr>
      <td><img src="<?php echo base_url();?>assets/img/logo/logo.png" height="106.96062992px" width="94.11023622px"></td>
      <td width="540px" style="text-align: center;">
         <span style="font-size: 18px;">PEMERINTAH KABUPATEN BONDOWOSO</span><br>
         <b style="font-size: 18px;">DINAS KOMUNIKASI DAN INFORMATIKA</b><br>
         <span style="font-size: 12px;">Jln. Letjen Panjaitan No. 234Telp. ( 0332 ) 421707</span><br>
         <span style="font-size: 11px;">email: admin@bondowosokab.go.id website: www.bondowosokab.go.id</span><br><br>
         <b style="font-size: 18px;">B O N D O W O S O</b>
      </td>
   </tr>
   <tr>
      <td colspan="2">
         <hr style="height: 2px;color: black;"><br>
         <hr style="height: 5px;margin-top: -10px;color: black;">
      </td>
   </tr>
</table>
<br>
<?php foreach($data_surat as $rdata){?>
<div style="text-align: center;">
   <b><u style="font-size: 16px;">BERITA ACARA MAINTENANCE</u></b> <br>
   <b>TANGGAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= date("j F, Y", strtotime($rdata->tgl_surat))?></b>
</div>
<b style="font-size: 16px;">Data Pelanggan</b><br><br>
<table style="border-collapse:collapse;" border="0">
   <tr>
      <td>Nama OPD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>:</td>
      <td><?= $rdata->nama_opd;?></td>
   </tr>
   <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><?= $rdata->alamat_opd;?></td>
   </tr>
</table>
<hr style="width:95%;text-align:left;margin-left:0">
<b style="font-size: 16px;">Data Kegiatan dan Alat</b><br><br>
<table style="border-collapse:collapse;" border="0">
   <tr>
      <td>Nama Kegiatan</td>
      <td>:</td>
      <?php $no=1; foreach($data_kegiatan as $rkeg){?>
      <td><?= $no. '.'?></td>
      <td><?= $rkeg->nama_keg?></td>
      <?php $no++; } ?>
   </tr>
   <tr>
      <td>Nama Alat</td>
      <td>:</td>
      <?php $no=1; foreach($data_alat as $ralat){?>
      <td><?= $no. '.'?></td>
      <td><?= $ralat->nama_jenisalat?></td>
      <?php $no++; } ?>
   </tr>
</table>
<hr style="width:95%;text-align:left;margin-left:0">
<b style="font-size: 16px;">Data Keterangan Kegiatan</b><br><br>
<table style="border-collapse:collapse;" border="0">
   <tr>
      <td>1.&nbsp;&nbsp; Check Link Fiber Optic / Wireless Status</td>
      <td>:</td>
      <td><?= $rdata->check_fiber;?></td>
   </tr>
   <tr>
      <td>2.&nbsp;&nbsp; Check Main Router Status</td>
      <td>:</td>
      <td><?= $rdata->check_router?></td>
   </tr>
   <tr>
      <td>3.&nbsp;&nbsp; Catatan Router</td>
      <td>:</td>
      <td><?= $rdata->note_router?></td>
   </tr>
   <tr>
      <td>4.&nbsp;&nbsp; Check Firewall Status</td>
      <td>:</td>
      <td><?= $rdata->check_firewall?></td>
   </tr>
   <tr>
      <td>5.&nbsp;&nbsp; Check Bandwidth Limiter Status</td>
      <td>:</td>
      <td><?= $rdata->check_bandwidth?></td>
   </tr>
   <tr>
      <td>6.&nbsp;&nbsp; Check Hotspot Status</td>
      <td>:</td>
      <td><?= $rdata->check_hotspot?></td>
   </tr>
   <tr>
      <td>7.&nbsp;&nbsp; Catatan NMS (Network Management System)</td>
      <td>:</td>
      <td><?= $rdata->note_nms?></td>
   </tr>
   <tr>
      <td>8.&nbsp;&nbsp; Check Finger Status</td>
      <td>:</td>
      <td><?= $rdata->check_finger?></td>
   </tr>
   <tr>
      <td>9.&nbsp;&nbsp; Catatan Finger</td>
      <td>:</td>
      <td><?= $rdata->note_finger?></td>
   </tr>
   <tr>
      <td>10. Check Wireless</td>
      <td>:</td>
      <td><?= $rdata->check_wireless?></td>
   </tr>
   <tr>
      <td>11. Catatan Wireless</td>
      <td>:</td>
      <td><?= $rdata->note_wireless?></td>
   </tr>
   <tr>
      <td>12. Catatan Tambahan</td>
      <td>:</td>
      <td><?= $rdata->note_tambahan?></td>
   </tr>
   <tr>
      <td>13. Jumlah Konektor</td>
      <td>:</td>
      <td><?= $rdata->jml_konektor?></td>
   </tr>
   <tr>
      <td>14. Panjang Utp</td>
      <td>:</td>
      <td><?= $rdata->jml_utp ." Meter"?></td>
   </tr>
</table>
<br>
<table cellpadding="0" cellspacing="0" border="0"  style="font-size:12px; font-family: Arial; line-height: 17px;" width="670">
   <tr>
      <td valign="top" style="padding: 10px; margin-top:20px; text-align:center; padding-left: 40px" width="240">Penanggung Jawab </td>
      <br>

      <td valign="top" style="padding: 10px; text-align:center;" width="250">
            Bondowoso, <?= date("j F, Y", strtotime($rdata->tgl_surat))?><br>
            P P T K<br/>
      </td>
   </tr>
   <tr>
      <td valign="top" style="padding: 30px; margin-top:20px; text-align:center; padding-left: 100px" width="240"><br>
      <td valign="top" style="padding: 30px;  margin-top:20px; text-align:center;" width="250"></td>
   </tr>
   <tr>
      <td valign="top" style=" text-decoration: underline; font-weight:bold;  margin-bottom:0px; padding-bottom:0px; text-align:center; padding-left: 40px" width="240"><?= $rdata->nama_pelaksana?><br>
      <td valign="top" style="  text-decoration: underline; font-weight:bold;  margin-bottom:0px; padding-bottom:0px; text-align:center;  padding-left: 20px;" width="250">EKA KUSUMA ASTUTI, S.Kom.</td>
   </tr>
   <tr>
      <td valign="top" style="margin-top:0px; text-align:center; padding-top:0px; padding-left: 40px" width="240">STAFF TEKNIS<br>
      <td valign="top" style="margin-top:0px; text-align:center; padding-top:0px; padding-left: 20px;" width="250">NIP. 19780517 200501 2 012</td>
   </tr>
</table>
<?php } ?>
<br>
</body>
</html>