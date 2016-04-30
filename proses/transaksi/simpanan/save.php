<?php

include '../../../config/koneksi.php';


$id_anggota = $_POST['id_anggota'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$id_jenis = $_POST['id_jenis'];
$jumlah_total = $_POST['jumlah_total'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`id_anggota` ,
							`jenis_transaksi` ,
							`status` ,
							`bulan` ,
							`tahun` ,
							`info_ke` ,
							`jumlah_total` ,
							`keterangan`
							)
							VALUES (
							'".$id_anggota."',
							'Simpanan',
							'Lunas',
							'".$bulan."',
							'".$tahun."',
							'".$id_jenis."',
							'".$jumlah_total."',
							'".$keterangan."'
							
							)");
							
							$simpan->execute();
							
							
							
							
							header("location:http://localhost/koperasi/?m=simpanan&p=all");


?>