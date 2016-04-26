<?php
$data = $koneksi->prepare("SELECT * FROM anggota WHERE id='".$_GET['id']."'");
$data->execute();

$row = $data->fetch(PDO::FETCH_OBJ);
//kamu lanjutin yaa itu bikin valuenyaaa
?>

<div>
	<form method="POST" action="http://localhost/koperasi/proses/master/anggota/update.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="page-header">Ubah Data Anggota</h2>
                </div>
                <!-- /.col-lg-8 -->
            </div>
		<div class="form-group">
			<label>No. Anggota</label>
			<input  name="id" value="<?php echo $row->id;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="hidden" size="30" placeholder="No. Anggota">
			<input  name="no_anggota" value="<?php echo $row->no_anggota;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="No. Anggota">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input  name="nama" value="<?php echo $row->nama;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input  name="email" value="<?php echo $row->email;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Email">
		</div>
		<div class="form-group">
			<label>No. HP</label>
			<input  name="no_hp" value="<?php echo $row->no_hp;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="No. HP">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div>
				<select class="form-control" name="jk" required="" type="text">
				<option value="">Pilih Salah Satu</option>
				<option value="L" <?php echo ($row->jk=="L")?"selected":"";?>>Laki-laki</option>
				<option value="P" <?php echo ($row->jk=="P")?"selected":"";?>>Perempuan</option>
				</select>
			</div>
			</select>
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input  type="file" name="foto"  value="<?php echo $row->foto;?>" >
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input  name="alamat" value="<?php echo $row->alamat;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Alamat">
		</div>
        <div class="form-group">
			<label>RT / RW</label>
			<input  name="rtrw" value="<?php echo $row->rtrw;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="RT / RW">
		</div>                                
		<div class="form-group">
			<label>Kelurahan</label>
			<input  name="kel" value="<?php echo $row->kel;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kelurahan">
		</div>
		<div class="form-group">
			<label>Kecamatan</label>
			<input  name="kec" value="<?php echo $row->kec;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kecamatan">
		</div>
		<div class="form-group">
			<label>Kabupaten</label>
			<input  name="kab" value="<?php echo $row->kab;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kabupaten">
		</div>
		<div class="form-group">
			<label>Provinsi</label>
			<input  name="prov" value="<?php echo $row->prov;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Provinsi">
		</div>
		<div class="form-group">
			<label>Kode Pos</label>
			<input  name="kodepos" value="<?php echo $row->kodepos;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Kode Pos">
		</div>
		<div class="form-group">
			<label>Negara</label>
			<input  name="negara" value="<?php echo $row->negara;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Negara">
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>

  </form>
</div>