<?php
include "koneksi.php";
$query="delete from prodi where kd_prodi='$_GET[kd_prodi]'";
$delete=mysql_query($query);
if($delete)
{
	?>
	<script language="javascript">
	alert("Data berhasil dihapus");
	document.location="index.php";
	</script>
	<?php
}
else
{
	?>
	<script language="javascript">
	alert("Data gagal dihapus");
	document.location="index.php";
	</script>
	<?php
}
?>