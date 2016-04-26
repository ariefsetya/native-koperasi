<?php

include '../../../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$bulan = $_POST['bulan'];
$jumlah_total = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`tanggal` ,
							`nama` ,
							`jenis_transaksi` ,
							`bulan` ,
							`jumlah_total` ,
							`keterangan`
							)
							VALUES (
							'".$tanggal."',
							'".$nama."',
							'".$jenis_transaksi."',
							'".$bulan."',
							'".$jumlah_total."',
							'".$keterangan."'
							
							)");
							
							$simpan->execute();
							
							
							
							
							header("location:http://localhost/koperasi/?m=simpanan&p=all");


?>