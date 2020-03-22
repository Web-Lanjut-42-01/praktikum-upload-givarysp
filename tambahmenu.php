<a href="<?=base_url().'index.php/praktikum3/'?>">Kembali</a>
<table>
	<form action="<?=base_url().'index.php/praktikum3/tambahmenu/'?>" method="POST" enctype="multipart/form-data">
	<tr>
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>BAHAN</td>
		<td>:</td>
		<td><input type="text" name="bahan"></td>
	</tr>
	<tr>
		<td>HARGA</td>
		<td>:</td>
		<td><input type="text" name="harga"></td>
	</tr>
	<tr>
		<td>FOTO</td>
		<td>:</td>
		<td><input type="file" name="foto">
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="Submit"></td>
	</tr>
	</form>
</table>