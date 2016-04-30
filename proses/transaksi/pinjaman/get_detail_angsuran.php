<?php

include '../../../config/koneksi.php';

$id_anggota = $_GET['id'];

$anggota = $koneksi->prepare("SELECT*FROM transaksi WHERE jenis_transaksi = 'Angsuran' and id='".$id_anggota."'");
$anggota->execute();

$data = $anggota->fetch(PDO::FETCH_OBJ);	
echo "Rp. ".number_format($data->jumlah_total);
?>