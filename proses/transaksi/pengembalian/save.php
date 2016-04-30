<?php

include '../../../config/koneksi.php';

$id = $_POST['id_angsuran'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("UPDATE 
				transaksi 
			SET
				status='Lunas',
				keterangan='".$keterangan."'
			WHERE
				id='".$id."'");
		$simpan->execute();


$anggota = $koneksi->prepare("SELECT*FROM transaksi WHERE id='".$id."'");
$anggota->execute();

$data = $anggota->fetch(PDO::FETCH_OBJ);
$id_induk = $data->id_induk;

$anggota = $koneksi->prepare("SELECT*FROM transaksi WHERE id='".$id_induk."'");
$anggota->execute();

$data = $anggota->fetch(PDO::FETCH_OBJ);
$info_ke = $data->info_ke;

$anggota = $koneksi->prepare("SELECT COUNT(id) as jumlah FROM transaksi WHERE id_induk='".$id_induk."' and status='Lunas'");
$anggota->execute();


$data = $anggota->fetch(PDO::FETCH_OBJ);
$jumlah = $data->jumlah;

if($info_ke==$jumlah){

	$simpan = $koneksi->prepare("UPDATE 
				transaksi 
			SET
				status='Lunas'
			WHERE
				id='".$id_induk."'");
		$simpan->execute();
}

	header("location:http://localhost/koperasi/?m=pengembalian&p=all");


?>