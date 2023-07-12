<h1>Data pengeluaranitemnur</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>ID</td>
    <td>Nobk</td>
    <td>Barang ID</td>
    <td>Jumlah</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluaranitemnur as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->id_nur?></td>
    <td><?php echo $row->nobk_nur?></td>
    <td><?php echo $row->barangid_nur?></td>
    <td><?php echo $row->jumlah_nur?></td>
</tr>
<?php
}
?>

</table>