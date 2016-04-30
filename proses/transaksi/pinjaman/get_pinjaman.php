<?php

include '../../../config/koneksi.php';

$id_anggota = $_GET['id'];

$anggota = $koneksi->prepare("SELECT*FROM transaksi WHERE jenis_transaksi = 'Pinjaman' and id_anggota='".$id_anggota."' and status='Belum Lunas'");
$anggota->execute();

$data = $anggota->fetchAll();
	echo "<option value=''>--Pilih Pinjaman--</option>";
foreach ($data as $key) {
	echo "<option value='".$key['id']."'>Pinjaman ".$key['info_ke']." bulan Rp. ".number_format($key['jumlah_asli'],2)."</option>";
}

?>