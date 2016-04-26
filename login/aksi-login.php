<?php
	session_start();
		include 'config.php';
		$email=$_POST['email'];
		$password=$_POST['password'];
		$query=mysql_query("select * from user where username='$nama' and password='$password'");
		$host=mysql_num_rows($query);
		if ($host==TRUE) {
			$_SESSION['nama']=$nama;
			header("location:login.php");
		}else{
			echo "Username atau Password yang Anda Masukkan Salah !";
		}
?>