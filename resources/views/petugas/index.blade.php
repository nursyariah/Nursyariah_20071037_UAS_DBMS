<h1>Data Petugas</h1>

<table border="1">

<tr>
    <td>No</td>
    <td>Petugas ID</td>
    <td>Nama Petugas</td>
    <td>Alamat</td>
    <td>Handphone</td>
    <td>Password</td>
    <td>Level</td>
</tr>

<?php 
$no=0;
 foreach ($petugasnur as $row) {
$no++;
?>
<tr>
    <td><?php echo $no?></td>
    <td><?php echo $row->petugasid_nur?></td>
    <td><?php echo $row->namapetugas_nur?></td>
    <td><?php echo $row->alamat_nur?></td>
    <td><?php echo $row->handphone_nur?></td>
    <td><?php echo $row->password?></td>
    <td><?php echo $row->level?></td>
</tr>
<?php
}
?>

</table>