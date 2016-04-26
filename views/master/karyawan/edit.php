<?php
$data = $koneksi->prepare("SELECT * FROM user WHERE id='".$_GET['id']."'");
$data->execute();

$row = $data->fetch(PDO::FETCH_OBJ);
?>

<div>
	<form method="POST" action="http://localhost/koperasi/proses/master/karyawan/update.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="page-header">Ubah Data Karyawan</h2>
                </div>
                <!-- /.col-lg-8 -->
            </div>
		<div class="form-group">
			<label>Nama</label>
			<input  name="id" value="<?php echo $row->id;?>" class="form-control" required type="hidden" size="30" placeholder="Nama">
			<input  name="nama" value="<?php echo $row->nama;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Nama">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input  name="email" value="<?php echo $row->email;?>" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" required type="text" size="30" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input  name="password" value="" class="form-control" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)"  type="password" size="30" placeholder="Password">
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>

  </form>
</div>