<?php

include '../../../config/koneksi.php';



$simpan = $koneksi->prepare("DELETE FROM user WHERE id='".$_GET['id']."'");
							
							
							$simpan->execute();
							
							
							header("location:http://localhost/koperasi/?m=karyawan&p=all");


?>