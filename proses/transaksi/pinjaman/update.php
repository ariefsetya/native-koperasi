<?php

include '../../../config/koneksi.php';

$id_koperasi = $_POST['id_koperasi'];
$id_induk = $_POST['id_induk'];
$id_anggota = $_POST['id_anggota'];
$no_transaksi = $_POST['no_transaksi'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$id_jenis = $_POST['id_jenis'];
$bunga = $_POST['bunga'];
$admin = $_POST['admin'];
$asuransi = $_POST['asuransi'];
$tabungan = $_POST['tabungan'];
$jumlah_asli = $_POST['jumlah_asli'];
$jumlah_bunga = $_POST['jumlah_bunga'];
$biaya_admin = $_POST['biaya_admin'];
$biaya_materai = $_POST['biaya_materai'];
$biaya_asuransi = $_POST['biaya_asuransi'];
$total_tabungan = $_POST['total_tabungan'];
$tabungan_perbulan = $_POST['tabungan_perbulan'];
$total_peminjaman = $_POST['total_peminjaman'];
$angsuran = $_POST['angsuran'];
$jumlah_total = $_POST['jumlah_total'];
$total_denda = $_POST['total_denda'];
$denda = $_POST['denda'];
$info_ke = $_POST['info_ke'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$status = $_POST['status'];
$keterangan = $_POST['keterangan'];


$simpan = $koneksi->prepare("UPDATE transaksi SET
							`id_koperasi`='".$id_koperasi."',
							`id_induk`='".$id_induk."',
							`id_anggota`='".$id_anggota."',
							`no_transaksi`='".$no_transaksi."',
							`jenis_transaksi`='".$jenis_transaksi."',
							`id_jenis`='".$id_jenis."',
							`bunga`='".$bunga."',
							`admin`='".$admin."',
							`asuransi`='".$asuransi."',
							`tabungan`='".$tabungan."',
							`jumlah_asli`='".$jumlah_asli."',
							`jumlah_bunga`='".$jumlah_bunga."',
							`biaya_admin`='".$biaya_admin."',
							`biaya_materai`='".$biaya_materai."',
							`biaya_asuransi`='".$biaya_asuransi."',
							`total_tabungan`='".$total_tabungan."',
							`tabungan_perbulan`='".$tabungan_perbulan."',
							`total_peminjaman`='".$total_peminjaman."',
							`angsuran`='".$angsuran."',
							`jumlah_total`='".$jumlah_total."',
							`total_denda`='".$total_denda."',
							`denda`='".$denda."',
							`info_ke`='".$info_ke."',
							`bulan`='".$bulan."',
							`tahun`='".$tahun."',
							`status`='".$status."',
							`keterangan`='".$keterangan."'
							
							WHERE id='".$_POST['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=pinjaman&p=all");


?>