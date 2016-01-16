<?php
	$alamat="localhost";
	$user="root";
	$pass="";
	$koneksi=mysql_connect("$alamat","$user","$pass");
	$sambung=mysql_select_db("db_fkom",$koneksi);
?>