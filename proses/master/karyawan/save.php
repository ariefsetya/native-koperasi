<?php

include '../../../config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$simpan = $koneksi->prepare("INSERT INTO user (
							`nama`,
							`email`,
							`password`
							)
							VALUES
							(
							'".$nama."',
							'".$email."',
							'".md5($password)."'
							)");
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=karyawan&p=all");


?>