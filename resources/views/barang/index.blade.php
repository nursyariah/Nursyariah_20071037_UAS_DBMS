<h1>Data Barangnur</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Barang ID</td>
    <td>Nama Barang</td>
    <td>Satuan</td>
    <td>Harga</td>
    <td>Kategori ID</td>
</tr>

<?php 
$no=0;
 foreach ($barangnur as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->barangid_nur?></td>
    <td><?php echo $row->namabarang_nur?></td>
    <td><?php echo $row->satuan_nur?></td>
    <td><?php echo $row->harga_nur?></td>
    <td><?php echo $row->kategiriid_nur?></td>
</tr>
<?php
}
?>

</table>