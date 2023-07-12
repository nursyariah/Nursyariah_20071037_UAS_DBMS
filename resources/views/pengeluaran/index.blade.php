<h1>Data PengeluaranNur</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Nobk</td>
    <td>Tanggal</td>
    <td>Noref</td>
    <td>Bagian ID</td>
    <td>petugas ID</td>
    <td>Keterangan</td>
</tr>

<?php 
$no=0;
 foreach ($pengeluarannur as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->nobk_nur?></td>
    <td><?php echo $row->tanggal_nur?></td>
    <td><?php echo $row->noref_nur?></td>
    <td><?php echo $row->bagianid_nur?></td>
    <td><?php echo $row->petugasid_nur?></td>
    <td><?php echo $row->keterangan_nur?></td>
</tr>
<?php
}
?>

</table>