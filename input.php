<form name="input" method="post" action="input.php">
<table border="0" align="center">
<tr>
	<td>Kode Prodi</td>
	<td><input type="text" name="kd_prodi" size="20" maxlength="15"/></td>
</tr>
<tr>
	<td>Nama Prodi</td>
	<td><input type="text" name="nama_prodi" size="40" maxlength="30"/></td>
</tr>
<tr>
	<td>Jenjang</td>
	<td><select name="pilihan"><option>Jenjang</option>
								<option>S1</option>
								<option>D3</option></select></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" name="simpan" value="Simpan"/>
</tr>
</table></form>
<?php
	extract($_POST);
	if(isset($simpan))
	{
		include "koneksi.php";
		$input="insert into prodi values('$kd_prodi','$nama_prodi','$jenjang')";
		$save=mysql_query($input);
		if($save)
		{
			?>
			<script language="javascript">
			alert("Data Berhasil Dimasukan");
			document.location="index.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script language="javascript">
			alert("Data Gagal Dimasukan");
			document.location="input.php";
			</script>
			<?php
		}
	}
?>