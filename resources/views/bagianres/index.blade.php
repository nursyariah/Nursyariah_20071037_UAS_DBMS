<h1>Data Bagian</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Bagian ID</td>
    <td>Nama Bagian</td>
    <td>Kepala Bagian</td>
    <td>telp</td>
</tr>

<?php 
$no=0;
 foreach ($bagiannur as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->bagianid_nur?></td>
    <td><?php echo $row->namabagian_nur?></td>
    <td><?php echo $row->kepalabagian_nur?></td>
    <td><?php echo $row->telp_nur?></td>
</tr>
<?php
}
?>

</table>