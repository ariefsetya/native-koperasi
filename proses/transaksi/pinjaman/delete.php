<?php

include '../../../config/koneksi.php';



$simpan = $koneksi->prepare("DELETE FROM transaksi WHERE id='".$_GET['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=pinjaman&p=all");


?>