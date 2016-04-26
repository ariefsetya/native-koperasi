<?php

include '../../../config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$pass = ($password!="")?",`password`='".md5($password)."'":"";

$simpan = $koneksi->prepare("UPDATE user SET
							`nama`='".$nama."',
							`email`='".$email."'".$pass."
							
							WHERE id='".$_POST['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=karyawan&p=all");


?>