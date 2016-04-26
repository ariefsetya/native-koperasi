<div>
	<form method="POST" action="http://localhost/koperasi/proses/master/anggota/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Tambah Anggota Baru<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"> Identitas Anggota </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<div class="form-group">
			<label>No. Anggota</label>
			<input  name="no_anggota" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="No. Anggota">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input  name="nama" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input  name="email" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Email">
		</div>
		<div class="form-group">
			<label>No. HP</label>
			<input  name="no_hp" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="No. HP">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div>
				<select class="form-control" name="jk" required="" type="text">
				<option value="">Pilih Salah Satu</option>
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
				</select>
			</div>
			</select>
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input  type="file" name="foto">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input  name="alamat" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Alamat">
		</div>
        <div class="form-group">
			<label>RT / RW</label>
			<input  name="rtrw" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="RT / RW">
		</div>                                
		<div class="form-group">
			<label>Kelurahan</label>
			<input  name="kel" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kelurahan">
		</div>
		<div class="form-group">
			<label>Kecamatan</label>
			<input  name="kec" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kecamatan">
		</div>
		<div class="form-group">
			<label>Kabupaten</label>
			<input  name="kab" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kabupaten">
		</div>
		<div class="form-group">
			<label>Provinsi</label>
			<input  name="prov" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Provinsi">
		</div>
		<div class="form-group">
			<label>Kode Pos</label>
			<input  name="kodepos" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kode Pos">
		</div>
		<div class="form-group">
			<label>Negara</label>
			<input  name="negara" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Negara">
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>
	<button class="btn btn-danger" type="cancel">Cancel</button>

  </form>
</div>