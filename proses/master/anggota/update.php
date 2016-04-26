<?php

include '../../../config/koneksi.php';

$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$rtrw = $_POST['rtrw'];
$kel = $_POST['kel'];
$kec = $_POST['kec'];
$kab = $_POST['kab'];
$prov = $_POST['prov'];
$kodepos = $_POST['kodepos'];
$negara = $_POST['negara'];



$simpan = $koneksi->prepare("UPDATE anggota SET
							`no_anggota`='".$no_anggota."',
							`nama`='".$nama."',
							`email`='".$email."',
							`no_hp`='".$no_hp."',
							`jk`='".$jk."',
							`alamat`='".$alamat."',
							`rtrw`='".$rtrw."',
							`kel`='".$kel."',
							`kec`='".$kec."',
							`kab`='".$kab."',
							`prov`='".$prov."',
							`kodepos`='".$kodepos."',
							`negara`='".$negara."'
		
							WHERE id='".$_POST['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=anggota&p=all");


?>