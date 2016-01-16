<form id="form1" name="form1" method="post" action="">
<table width="39%" border="2" align="center">
<tr>
	<td width="20%" align="center"><b>Kode Prodi</b></td>
	<td width="60%" align="center"><b>Nama Prodi</b></td>
	<td width="20%" align="center"><b>Jenjang</b></td>
	<td>Aksi</td>
</tr>
<?php
	include "koneksi.php";
	$query="select*from prodi";
	$result=mysql_query($query);
	while($data=mysql_fetch_array($result))
	{
?>
<tr>
	<td align="center"><a href="edit.php?kd_prodi=<?php echo $data['kd_prodi'];?>"><?php echo $data['kd_prodi']; ?></a></td>
	<td align="center"><?php echo $data['nama_prodi'];?></td>
	<td align="center"><?php echo $data['jenjang'];?></td>
	<td align="center"><a href="delete.php?kd_prodi=<?php echo $data['kd_prodi'];?>"
	onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" title="Delete Data">Delete<a></td>
</tr>
<?php
	}
?>
</table>
</form>
<center><a href="input.php">Tambah Data</a></center>