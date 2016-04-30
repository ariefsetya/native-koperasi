<?php
	session_start();
	include '../config/koneksi.php';
	$_SESSION['login'] = false;
	$_SESSION['nama'] = "";
		header("location:".$url."index.php");
?>