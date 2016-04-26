<?php

include '../../../config/koneksi.php';




$simpan = $koneksi->prepare("DELETE FROM anggota WHERE id='".$_GET['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=anggota&p=all");


?>