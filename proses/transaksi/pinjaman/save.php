<?php

include '../../../config/koneksi.php';

$id_anggota = $_POST['id_anggota'];
$jumlah_asli = $_POST['jumlah_asli'];
$bunga = $_POST['bunga'];
$jumlah_bunga = $_POST['jumlah_bunga'];
$biaya_admin = $_POST['biaya_admin'];
$biaya_materai = $_POST['biaya_materai'];
$biaya_asuransi = $_POST['biaya_asuransi'];
$total_peminjaman = $_POST['total_peminjaman'];
$angsuran = $_POST['angsuran'];
$jumlah_total = $_POST['jumlah_total'];
$info_ke = $_POST['info_ke'];
$keterangan = $_POST['keterangan'];

$anggota = $koneksi->prepare("SELECT*FROM anggota WHERE id='".$id_anggota."'");
$anggota->execute();

$data = $anggota->fetch(PDO::FETCH_OBJ);


$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`id_anggota` ,
							`id_induk` ,
							`jumlah_asli` ,
							`jumlah_bunga` ,
							`biaya_admin` ,
							`biaya_materai` ,
							`biaya_asuransi` ,
							`total_peminjaman` ,
							`angsuran` ,
							`jumlah_total` ,
							`info_ke` ,
							`bunga` ,
							`status` ,
							`jenis_transaksi` ,
							`keterangan`
							)
							VALUES (
							'".$id_anggota."',
							'0',
							'".$jumlah_asli."',
							'".$jumlah_bunga."',
							'".$biaya_admin."',
							'".$biaya_materai."',
							'".$biaya_asuransi."',
							'".$total_peminjaman."',
							'".$angsuran."',
							'".$jumlah_total."',
							'".$info_ke."',
							'".$bunga."',
							'Belum Lunas',
							'Pinjaman',
							'".$keterangan."'
							
							)");
							
							$simpan->execute();
							
							$last_id = $koneksi->lastInsertId();
							
							
							for($i=1;$i<=$info_ke;$i++){
								
							$simpan = $koneksi->prepare("INSERT INTO transaksi (
							`id_anggota` ,
							`id_induk` ,
							`jumlah_asli` ,
							`jumlah_bunga`,
							`jumlah_total` ,
							`info_ke` ,
							`status` ,
							`jenis_transaksi`
							)
							VALUES (
							'".$id_anggota."',
							'".$last_id."',
							'".$angsuran."',
							'".($jumlah_bunga/$info_ke)."',
							'".$angsuran."',
							'".$i."',
							'Belum Lunas',
							'Angsuran'
							
							)");
							
							$simpan->execute();
								
							}
							
							$pinjaman = $koneksi->prepare("INSERT INTO keuangan (
							`id_anggota` ,
							`id_transaksi` ,
							`no_nota` ,
							`tabel`,
							`info` ,
							`masuk` ,
							`keluar` ,
							`jenis`
							)
							VALUES (
							'".$id_anggota."',
							'".$last_id."',
							'KSP-".date("YmdHis")."',
							'transaksi',
							'Pinjaman ".$data->nama." Rp. ".number_format($jumlah_asli,2)." (".date("d/m/Y").")',
							'0',
							'".$jumlah_asli."',
							'pinjaman'
							
							)");
							
							$pinjaman->execute();
							$pinjaman = $koneksi->prepare("INSERT INTO keuangan (
							`id_anggota` ,
							`id_transaksi` ,
							`no_nota` ,
							`tabel`,
							`info` ,
							`masuk` ,
							`keluar` ,
							`jenis`
							)
							VALUES (
							'".$id_anggota."',
							'".$last_id."',
							'KSP-".date("YmdHis")."-AD',
							'transaksi',
							'Biaya Admin Pinjaman ".$data->nama." (".date("d/m/Y").")',
							'0',
							'".$biaya_admin."',
							'biaya_admin'
							
							)");
							
							$pinjaman->execute();
							$pinjaman = $koneksi->prepare("INSERT INTO keuangan (
							`id_anggota` ,
							`id_transaksi` ,
							`no_nota` ,
							`tabel`,
							`info` ,
							`masuk` ,
							`keluar` ,
							`jenis`
							)
							VALUES (
							'".$id_anggota."',
							'".$last_id."',
							'KSP-".date("YmdHis")."-MA',
							'transaksi',
							'Biaya Materai Pinjaman ".$data->nama." (".date("d/m/Y").")',
							'0',
							'".$biaya_materai."',
							'biaya_materai'
							
							)");
							
							$pinjaman->execute();
							$pinjaman = $koneksi->prepare("INSERT INTO keuangan (
							`id_anggota` ,
							`id_transaksi` ,
							`no_nota` ,
							`tabel`,
							`info` ,
							`masuk` ,
							`keluar` ,
							`jenis`
							)
							VALUES (
							'".$id_anggota."',
							'".$last_id."',
							'KSP-".date("YmdHis")."-AS',
							'transaksi',
							'Biaya Asuransi Pinjaman ".$data->nama." (".date("d/m/Y").")',
							'0',
							'".$biaya_asuransi."',
							'biaya_asuransi'
							
							)");
							
							$pinjaman->execute();
							
							
							header("location:http://localhost/koperasi/?m=pinjaman&p=all");


?>