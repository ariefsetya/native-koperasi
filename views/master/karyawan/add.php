<div>
	<form method="POST" action="http://localhost/koperasi/proses/master/karyawan/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Tambah Anggota Karyawan<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"> Karyawan </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<div class="form-group">
			
			<div class="form-group">
				<label>Nama</label>
				<input  name="nama" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Nama">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input  name="email" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="email" size="30" placeholder="E-mail">
			</div>			
			<div class="form-group">
				<label>Password</label>
				<input  name="password" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="password" size="30" placeholder="Password">
			</div>
		
		
	<button type="submit" class="btn btn-primary">Simpan</button>
	<button class="btn btn-danger" type="cancel">Cancel</button>

  </form>
</div>