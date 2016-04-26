<?php

include '../../../config/koneksi.php';

$nama = $_POST['nama'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$angsuran = $_POST['angsuran'];
$tanggal = $_POST['tanggal'];
$jumlah_total = $_POST['jumlah_total'];
$total_denda = $_POST['total_denda'];
$jumlah_total = $_POST['jumlah_total'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`nama` ,
							`jenis_transaksi` ,
							`angsuran` ,
							`tanggal` ,
							`jumlah_total` ,
							`total_denda` ,
							`keterangan`
							)
							VALUES (
							'".$nama."',
							'".$jenis_transaksi."',
							'".$angsuran."',
							'".$tanggal."',
							'".$jumlah_total."',
							'".$total_denda."',
							'".$keterangan."'
							
							)");
							
							$simpan->execute();
							
							$last_id = $koneksi->lastInsertId();
							
							
							for($i=1;$i<=$info_ke;$i++){
								
							$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`nama` ,
							`jenis_transaksi` ,
							`angsuran` ,
							`tanggal` ,
							`jumlah_total` ,
							`total_denda` ,
							`keterangan`
							)
							VALUES (
							'".$nama."',
							'".$jenis_transaksi."',
							'".$angsuran."',
							'".$tanggal."',
							'".$jumlah_total."',
							'".$total_denda."',
							'".$keterangan."'
							
							)");
							
							$simpan->execute();
								
							}
							
							
							header("location:http://localhost/koperasi/?m=pengembalian&p=all");


?>