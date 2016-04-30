<?php
	session_start();
	include '../config/koneksi.php';

	if(@$_SESSION['login']==true){
		header("location:".$url."index.php");
	}
		$email=$_POST['email'];
		$password=$_POST['password'];

		$anggota = $koneksi->prepare("select * from user where email='".$email."' and password=md5('".$password."')");
		$anggota->execute();

		$data = $anggota->fetch(PDO::FETCH_OBJ);

		print_r($data);
		if (!empty($data)) {
			$_SESSION['nama']=$data->nama;
			$_SESSION['login']=true;
			header("location:".$url."index.php");
		}else{
			echo "Username atau Password yang Anda Masukkan Salah !";
		}
?>