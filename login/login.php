<html>
<title>Login</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="login.php">
				<b>Koperasi</b> Online
				</a>
			</div>
		<div class="login-box-body">
			<p class="login-box-msg">Sign in</p>
			<form method="post" action="aksi-login.php">
				<div class="form-grous has-feedback">
					<input class="form-control" type="email" placeholder="Email" name="email" required="">
				</div>
				<div class="form-group has-feedback">
					<input class="form-coontrol" type="password" placeholder="Password" name="password" required="">
				</div>
				<div class="row">
					<button class="btn-primary btn-block btn-flat" type="submit">Sign In</button>
				</div>
			</form>
		</div>
		</div>
	</body>
</html>