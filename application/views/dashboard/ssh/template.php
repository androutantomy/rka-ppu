<?php
$templates = $template->result();
?>
<table style="border-collapse: collapse;" width="100%">
    <thead>
        <tr>
            <td style="border: 1px solid black">Id</td>
            <td style="border: 1px solid black">No Rekening</td>
            <td style="border: 1px solid black">Nama</td>
            <td style="border: 1px solid black">Nominal Standar Biaya</td>
            <td style="border: 1px solid black">Satuan Harga</td>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($templates)) {
            foreach ($templates as $value) {
        ?>
                <tr>
                    <td style="border: 1px solid black; text-align: left;"><?php echo $value->id_standar_biaya ?></td>
                    <td style="border: 1px solid black; text-align: left;"><?php echo $value->no_rekening_standar_biaya ?></td>
                    <td style="border: 1px solid black"><?php echo $value->nama_standar_biaya ?></td>
                    <td style="border: 1px solid black"><?php echo $value->jumlah_standar_biaya ?></td>
                    <td style="border: 1px solid black"><?php echo $value->jumlah_standar_biaya ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
        <tr></tr>
    </tbody>
</table>
<?php
$file = "Import_Template_Standar_Biaya.xlsx";
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=$file");
?>