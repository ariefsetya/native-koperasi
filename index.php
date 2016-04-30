<?php
session_start();
if(@$_SESSION['login']==false){
	header("location:login/login.php");
}

date_default_timezone_set("Asia/Jakarta");
include "config/koneksi.php";
global $koneksi;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Koperasi Simpan Pinjam</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo$url;?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo$url;?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo$url;?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo$url;?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo$url;?>assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo$url;?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <!-- jQuery -->
    <script src="<?php echo$url;?>assets/bower_components/jquery/dist/jquery.min.js"></script>

</head>

<body>

    <div id="wrapper">

		<?php include "views/Utility/menu.php";?>
        <div id="page-wrapper">
            <?php
				$m = isset($_GET['m'])?trim($_GET['m']):"";
				$p = isset($_GET['p'])?trim($_GET['p']):"";
				switch($m){
					case 'anggota':
						switch($p){
							case 'add':
								include "views/master/anggota/add.php";

							break;
							case 'all':
								include "views/master/anggota/all.php";

							break;
							case 'edit':
								include "views/master/anggota/edit.php";

							break;
								
						}
					break;
					case 'karyawan':
						switch($p){
							case 'add':
								include "views/master/karyawan/add.php";

							break;
							case 'all':
								include "views/master/karyawan/all.php";

							break;
							case 'edit':
								include "views/master/karyawan/edit.php";

							break;
							
							
						}
					break;
					case 'pinjaman':
						switch($p){
							case 'add':
								include "views/transaksi/pinjaman/add.php";

							break;
							case 'all':
								include "views/transaksi/pinjaman/all.php";

							break;
							case 'edit':
								include "views/transaksi/pinjaman/edit.php";

							break;
							
							
						}
					break;
					case 'simpanan':
						switch($p){
							case 'add':
								include "views/transaksi/simpanan/add.php";

							break;
							case 'all':
								include "views/transaksi/simpanan/all.php";

							break;
							case 'edit':
								include "views/transaksi/simpanan/edit.php";

							break;
							
							
						}
					
					break;
					case 'pengembalian':
						switch($p){
							case 'add':
								include "views/transaksi/pengembalian/add.php";

							break;
							case 'all':
								include "views/transaksi/pengembalian/all.php";

							break;
							case 'edit':
								include "views/transaksi/pengembalian/edit.php";

							break;
							
							
						}
						
						
					break;
					case 'laporan':
						switch($p){
							case 'pinjaman':
								include "views/transaksi/pinjaman/all.php";
							break;
							case 'simpanan':
								include "views/transaksi/simpanan/all.php";
							break;
							case 'angsuran':
								include "views/transaksi/pengembalian/all.php";
							break;
							
							
						}
					
					break;
					
					default:
						include "views/home.php";
					break;
				}
				?>
				
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo$url;?>assets/bower_components/morrisjs/morris.min.js"></script>
    <!--script src="<?php echo$url;?>assets/js/morris-data.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo$url;?>assets/dist/js/sb-admin-2.js"></script>

</body>
<script type="text/javascript">
	console.log('%c/***********************************\r\n  Made with love\r\n\r\n  Come on you can you can, qori :)\r\n***********************************/', 'background: #fbfbfb; color: #2d89ef;font-size:20pt;');
</script>

</html>
<?php
/******************************
Made with love

Come on you can you can, qori :)
********************************/
?>