<?php

include '../../../config/koneksi.php';

$id_anggota = $_GET['id'];

$anggota = $koneksi->prepare("SELECT*FROM transaksi WHERE jenis_transaksi = 'Angsuran' and id_induk='".$id_anggota."' and status='Belum Lunas'");
$anggota->execute();

$data = $anggota->fetchAll();	
echo "<option value=''>--Pilih Angsuran--</option>";

foreach ($data as $key) {
	echo "<option value='".$key['id']."'>Angsuran ke-".$key['info_ke']." Rp. ".number_format($key['jumlah_total'],2)."</option>";
}

?>