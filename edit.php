<?php
	include "koneksi.php";
	$query="select * from prodi where kd_prodi='$_GET[kd_prodi]'";
	$result=mysql_query($query);
	while($data=mysql_fetch_array($result))
	{
		$kd_prodi=$data['kd_prodi'];
		$nama_prodi=$data['nama_prodi'];
		$jenjang=$data['jenjang'];
	}
?>
<form name="edit" method="post" action="#">
<table border="0" align="center">
<tr>
	<td>Kode Prodi</td>
	<td>:<input type="text" name="kd_prodi" size="20" maxlength="15" value="<?php echo $kd_prodi;?>"readonly/></td>
</tr>
<tr>
	<td>Nama Prodi</td>
	<td>:<input type="text" name="nama_prodi" size="40" maxlength="30" value="<?php echo $nama_prodi;?>"/></td>
</tr
<tr>
	<td>Jenjang</td>
<?php
if($jenjang=='S1')
{
	?>
	<td>:<select name="pilihan"><option>Jenjang</option>
								<option>S1</option>
								<option>D3</option></select></td>
<?php
}
else
{
	?>
	<td>:<select name="pilihan"><option>Jenjang</option>
								<option>S1</option>
								<option>D3</option></select></td>
<?php
}
?>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="simpan" value="Simpan"/>
</tr>
</table>
</form>
<?php
extract ($_POST);
if(isset($edit))
{
	$input="update prodi set nama_prodi='$nama_prodi', jenjang='$jenjang' where kd_prodi='$kd_prodi'";
	$save=mysql_query($input);
	if($save)
	{
		?>
		<script language="javascript">
		alert("Data Berhasil diUpdate");
		document.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script language="javascript">
		alert("Data Gagal diUpdate");
		document.location="edit.php";
		</script><?php
	}
}
?>