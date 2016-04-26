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




$simpan = $koneksi->prepare("INSERT INTO anggota (
							`no_anggota`,
							`nama`,
							`email`,
							`no_hp`,
							`jk`,
							`alamat`,
							`rtrw`,
							`kel`,
							`kec`,
							`kab`,
							`prov`,
							`kodepos`,
							`negara`
							)
							VALUES
							(
							'".$no_anggota."',
							'".$nama."',
							'".$email."',
							'".$no_hp."',
							'".$jk."',
							'".$alamat."',
							'".$rtrw."',
							'".$kel."',
							'".$kec."',
							'".$kab."',
							'".$prov."',
							'".$kodepos."',
							'".$negara."'
							)");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=anggota&p=all");


?>