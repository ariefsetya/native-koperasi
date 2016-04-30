<?php
	session_start();
	include '../config/koneksi.php';
	if(@$_SESSION['login']==true){
		header("location:".$url."index.php");
	}
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

	<body class="hold-transition login-page">

    <div id="wrapper">

        <div style="width:300px;margin:100px auto;">
		<div class="login-box">
			<div class="login-logo">
				<h1><b>Koperasi</b> Online</h1>
			</div>
		<div class="login-box-body">
			<form method="post" action="aksi-login.php">
				<label>E-Mail</label>
				<div class="form-grous has-feedback">
					<input class="form-control" type="email" placeholder="Email" name="email" required="">
				</div>

				<label>Password</label>
				<div class="form-group has-feedback">
					<input class="form-control" type="password" placeholder="Password" name="password" required="">
				</div>
				<div class="row">
					<button class="btn btn-primary btn-block btn-flat" type="submit">Sign In</button>
				</div>
			</form>
		</div>
		</div>
		</div>
		</div>
	</body>
	<!-- Bootstrap Core JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo$url;?>assets/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo$url;?>assets/bower_components/morrisjs/morris.min.js"></script>
    <!--script src="assets/js/morris-data.js"></script-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo$url;?>assets/dist/js/sb-admin-2.js"></script>
</html>