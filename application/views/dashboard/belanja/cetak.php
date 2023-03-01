<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
  <meta name="author" content="User" />
  <meta name="company" content="Microsoft Corporation" />
  <style type="text/css">
    html {
      font-family: Calibri, Arial, Helvetica, sans-serif;
      font-size: 10pt;
      background-color: white
    }
  </style>
</head>

<body>
  <style>
  </style>
  <table border="0" width="100%">
    <tr>
      <th width="10%" style="text-align : center;">
        <img src="<?php echo base_url() ?>assets/images/logo.png" style="width:85px">
      </th>
      <th style="text-align : center; padding: 1px;">
        <strong>RINCIAN BELANJA SUB KEGIATAN UNIT KERJA <?php echo strtoupper($this->config->item('yayasan_name')); ?></strong><br>
        <?php echo $this->config->item('yayasan_name'); ?> Tahun Anggaran <?php echo $this->session->userdata("anggaran") ?>
      </th>
    </tr>
  </table>
  <br>
  <br>
  <?php
  $update = $data->row();
  ?>

  <table border="0" width="100%">
    <tr>
      <td width="20%">Unit Organisasi</td>
      <td>: <?php echo $this->config->item('yayasan_name'); ?></td>
    </tr>
    <tr>
      <td>Sub Unit Organisasi</td>
      <td>: <?php echo $this->session->userdata('nama_user') ?></td>
    </tr>
    <tr>
      <td>Kegiatan</td>
      <td>: <?php echo !empty($update) ? $update->nama_child : '-' ?></td>
    </tr>
    <tr>
      <td>Sub Kegiatan</td>
      <td>: <?php echo !empty($update) ? $update->nama_kegiatan : '-' ?></td>
    </tr>
    <tr>
      <td>Sumber Pendanaan</td>
      <td>: <?php echo $this->config->item('pendapatan_yayasan_name'); ?></td>
    </tr>
    <tr>
      <td>Lokasi Kegiatan</td>
      <td>: <?php echo $this->config->item('alamat_yayasan'); ?></td>
    </tr>
    <tr>
      <td>Waktu Pelaksanaan</td>
      <td>: Januari s.d. Desember</td>
    </tr>
    <tr>
      <td>Jumlah 2023</td>
      <td>: Rp. <?php echo isset($total_belanja) && !empty($total_belanja) ? number_format($total_belanja->total_belanja, 0, '.', ',') : '-' ?></td>
    </tr>
  </table>
  <br>
  <br>

  <table style="border-collapse: collapse;" border="0" width="100%">
    <thead>
      <tr>
        <td style="border: 1px solid black" colspan="13" style="text-align: center"><center>RINCIAN BELANJA SUB KEGIATAN</center></td>
      </tr>
      <tr>
        <td style="border: 1px solid black" rowspan="5" width="10%">Kode Rekening</td>
        <td style="border: 1px solid black" rowspan="5" width="20%" style="text-align: center;"><center>Uraian</center></td>
        <td style="border: 1px solid black" colspan="5" style="text-align: center;" width="30%"><center>Asli</center></td>
        <td style="border: 1px solid black" colspan="5" style="text-align: center;" width="30%"><center>Perubahan</center></td>
        <td style="border: 1px solid black" rowspan="4" style="text-align: center;"><center>Bertambah / Berkurang</center></td>
      </tr>
      <tr>
        <td style="border: 1px solid black" colspan="4" style="text-align: center;"><center>Rincian Perhitungan</center></td>
        <td style="border: 1px solid black" rowspan="3" style="text-align: center;"><center>Jumlah</center></td>
        <td style="border: 1px solid black" colspan="4" style="text-align: center;"><center>Rincian Perhitungan</center></td>
        <td style="border: 1px solid black" rowspan="3" style="text-align: center;"><center>Jumlah</center></td>
      </tr>
      <tr>
        <td style="border: 1px solid black" rowspan="2"><center>Koefisien</center></td>
        <td style="border: 1px solid black" rowspan="2"><center>Satuan</center></td>
        <td style="border: 1px solid black" rowspan="2"><center>Satuan</center></td>
        <td style="border: 1px solid black" rowspan="2"><center>PPN</center></td>
      </tr>
      <tr>
        <td style="border: 1px solid black"><center>Koefisien</center></td>
        <td style="border: 1px solid black"><center>Satuan</center></td>
        <td style="border: 1px solid black"><center>Satuan</center></td>
        <td style="border: 1px solid black"><center>PPN</center></td>
      </tr>
    </thead>
    <tbody>
      <?php
      $grand_total = 0;
      if ($datatabel->num_rows() > 0) {
        foreach ($datatabel->result() as $result) {
      ?>
          <tr>
            <td style="border: 1px solid black"><?php echo $result->no_rekening_kegiatan; ?></td>
            <td style="border: 1px solid black" colspan="5"><?php echo $result->nama_kegiatan; ?></td>
            <td style="border: 1px solid black"></td>
            <td style="border: 1px solid black" colspan="4"></td>
            <td style="border: 1px solid black"></td>
            <td style="border: 1px solid black"></td>
          </tr>
          <?php if (!empty($result->belanja)) {
            foreach ($result->belanja as $belanja) {
          ?>
              <tr>
                <td style="border: 1px solid black"></td>
                <td style="border: 1px solid black"><?php echo $belanja->nama_standar_biaya; ?></td>
                <td style="border: 1px solid black"><?php echo $belanja->koefisien_1; ?></td>
                <td style="border: 1px solid black"><?php echo $belanja->nama_satuan; ?></td>
                <td style="border: 1px solid black"><?php echo $belanja->jumlah_standar_biaya; ?></td>
                <td style="border: 1px solid black"><?php echo $belanja->pajak == '1' ? $this->config->item('ppn_value') : ''; ?></td>
                <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($belanja->total_belanja);
                    $grand_total += $belanja->total_belanja; ?></td>
                <td style="border: 1px solid black" colspan="4"></td>
                <td style="border: 1px solid black"></td>
                <td style="border: 1px solid black"></td>
              </tr>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      <?php } ?>
      <tr>
        <td style="border: 1px solid black" colspan="6" style="text-align: center;"><strong>Grand Total</strong> :</td>
        <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($grand_total) ?></td>
        <td style="border: 1px solid black" colspan="5"></td>
        <td style="border: 1px solid black"></td>
      </tr>
      <tr>
        <td style="border: 1px solid black" colspan="7" style="text-align: center;"></td>
        <td style="border: 1px solid black" colspan="7" style="text-align: center;"><center>Samarinda, <?php echo date('d-m-Y'); ?></center></td>
      </tr>
      <tr>
        <td style="border: 1px solid black" colspan="7" style="text-align: center;">
          <center>Pembina <?php echo $this->session->userdata('nama_user') ?>
          <br><br><br><br>
          Prof. Dr. Awang Faroek Ishak, M.M</center>
        </td>
        <td style="border: 1px solid black" colspan="7" style="text-align: center;">
          <center>Ketua <?php echo $this->session->userdata('nama_user') ?>
          <br><br><br><br>
          Dayang Donna Walfiaries Tania, S.Psi, M.M</center>
        </td>
      </tr>
    </tbody>
  </table>
  <script>
    window.print();
  </script>
</body>

</html>
