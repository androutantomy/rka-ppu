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

    table tr td {
      padding: 3px;
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
      <td>: <?php echo isset($total_belanja) && !empty($total_belanja) ? currency_formatter($total_belanja->total_belanja) : '-' ?></td>
    </tr>
  </table>
  <br>
  <br>
  <table style="border-collapse: collapse;" border="0" width="100%">
    <thead>
      <tr>
        <td style="border: 1px solid black" colspan="7" style="text-align: center">
          <center>RINCIAN BELANJA SUB KEGIATAN</center>
        </td>
      </tr>
      <tr>
        <td style="border: 1px solid black" colspan="2" rowspan="5" width="40%" style="text-align: center;">
          <center>Uraian</center>
        </td>
      </tr>
      <tr>
        <td style="border: 1px solid black" rowspan="3" style="text-align: center;">
          <center>Koefisien</center>
        </td>
        <td style="border: 1px solid black" rowspan="3" style="text-align: center;">
          <center>Satuan</center>
        </td>
      </tr>
      <tr>
        <td style="border: 1px solid black" rowspan="2">
          <center>Harga Satuan</center>
        </td>
        <td style="border: 1px solid black" rowspan="2">
          <center>PPN</center>
        </td>
        <td style="border: 1px solid black" rowspan="2">
          <center>Total</center>
        </td>
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
            <td style="border: 1px solid black" colspan="5"><strong><?php echo strtoupper($result->nama_kegiatan); ?></strong></td>
            <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($result->total_belanja, false) ?></td>
          </tr>
          <?php if (!empty($result->belanja)) {
            foreach ($result->belanja as $belanja) {
              $history = $belanja->history;
              $cr_total = $belanja->total_belanja;
              $hs_total = $history != "" ? $history->total_belanja : 0;
              $dif_total = abs($cr_total - $hs_total) > 0 ? currency_formatter(abs($cr_total - $hs_total), false) : '';
          ?>
              <tr>
                <td style="border: 1px solid black"></td>
                <td style="border: 1px solid black" colspan="5"><strong>[Ket] <?php echo $belanja->keterangan; ?></strong></td>
                <td style="border: 1px solid black"></td>
              </tr>
              <tr>
                <td style="border: 1px solid black"></td>
                <td style="border: 1px solid black"><?php echo $belanja->nama_standar_biaya; ?></td>
                <td style="border: 1px solid black"><?php echo $belanja->koefisien_1 ?><?php echo $belanja->volume_2 != "" ? ' X ' : '' ?><?php echo $belanja->volume_2 != "" ? $belanja->volume_2 : '' ?> <?php echo $belanja->nama_satuan; ?></td>
                <td style="border: 1px solid black; text-align: center;"><?php echo $belanja->satuan_nama; ?></td>
                <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($belanja->jumlah_standar_biaya, false); ?></td>
                <td style="border: 1px solid black; text-align: center;"><?php echo $belanja->pajak == '1' ? $this->config->item('ppn_value') : ''; ?></td>
                <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($belanja->total_belanja, false); $grand_total += $belanja->total_belanja; ?></td>
              </tr>
            <?php } ?>
          <?php } ?>
        <?php } ?>
      <?php } ?>
      <tr>
        <td style="border: 1px solid black" colspan="6" style="text-align: center;"><strong>Grand Total</strong> :</td>
        <td style="border: 1px solid black; text-align: right;"><?php echo currency_formatter($grand_total, false) ?></td>
      </tr>
    </tbody>
  </table>
  <br><br>
  <table width="100%" style="page-break-inside: avoid;">
    <tr>
      <td style="text-align: center;"></td>
      <td style="text-align: center;">
        <center>Samarinda, <?php echo date('d-m-Y'); ?></center>
      </td>
    </tr>
    <tr>
      <td style="text-align: center;">
        <center>Pembina <?php echo $this->config->item('yayasan_name') ?>
          <br><br><br><br><br><br>
          Prof. Dr. H. Awang Faroek Ishak, M.M
        </center>
      </td>
      <td style="text-align: center;">
        <center>Ketua <?php echo $this->config->item('yayasan_name') ?>
          <br><br><br><br><br><br>
          Hj. Dayang Donna Walfiaries Tania, S.Psi, M.M
        </center>
      </td>
    </tr>
  </table>
  <script>
    window.print();
  </script>
</body>

</html>