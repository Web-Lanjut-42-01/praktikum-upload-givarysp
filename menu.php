<a href="<?=base_url().'index.php/praktikum3/tambahmenu/'?>">Tambah Data</a>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NAMA MAKANAN</th>
		<th>BAHAN</th>
		<th>HARGA</th>
		<th>FOTO</th>
	</tr>
<?php
	$no=1;
	foreach($data as $key) {
?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $key['nama'] ?></td>
		<td><?php echo $key['bahan'] ?></td>
		<td><?php echo $key['harga'] ?></td>
		<td><?php echo $key['foto'] ?></td>
	</tr>
<?php
	$no++;
}
?>
</table>