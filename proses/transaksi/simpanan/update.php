<?php

include '../../../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$bulan = $_POST['bulan'];
$jumlah_total = $_POST['jumlah'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("UPDATE transaksi SET
							`tanggal`='".$tanggal."',
							`nama`'".$nama."',
							`jenis_transaksi`='".$jenis_transaksi."',
							`bulan`='".$bulan."',
							`jumlah_total`='".$jumlah_total."',
							`keterangan`='".$keterangan."'
							
							
							WHERE id='".$_POST['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=simpanan&p=all");


?>