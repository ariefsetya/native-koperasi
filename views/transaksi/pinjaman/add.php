<div>
	<form method="POST" action="http://localhost/koperasi/proses/transaksi/pinjaman/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Tambah Pinjaman<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"> Pinjaman Baru </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
		<div class="form-group">
			<label>Anggota</label>
			<select name="id_anggota" class="form-control">
			<option value="">--Pilih Anggota--</option>
			<?php
			$anggota = $koneksi->prepare("SELECT * FROM anggota order by nama asc");
			$anggota->execute();
			
			$anggotas = $anggota->fetchAll();
			foreach($anggotas as $key){

				?>
				<option value="<?php echo $key['id'];?>"><?php echo $key['nama'];?></option>
				<?php
			}
			?>
			</select>
			</div>



			<label>Jangka Waktu</label>
		<div class="form-group input-group">
			<input  name="info_ke" id="info_ke" class="form-control" onkeyup="hitung()" required type="text" size="30" placeholder="Jangka Waktu">
			<span class="input-group-addon">bulan</span>
		</div>
		
			<label>Jumlah Pinjaman</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="jumlah_asli" id="jumlah_asli" class="form-control" onkeyup="hitung()" required type="text" size="30" placeholder="Jumlah Asli">
		</div>
		<label>Bunga</label>
		<div class="form-group input-group">
			<input  name="bunga" id="bunga" class="form-control" onkeyup="hitung()" required type="text" size="30" placeholder="Bunga">
		<span class="input-group-addon">%</span>
		</div>
		<label>Total Bunga</label>
		<div class="form-group input-group">
			<input  name="jumlah_bunga" id="jumlah_bunga" class="form-control"  required type="text" size="30" placeholder="Bunga">
		<span class="input-group-addon">%</span>
		</div>
			<label>Biaya Admin</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="biaya_admin" id="biaya_admin" class="form-control"  onkeyup="hitung()" required type="text" size="30" placeholder="Biaya Admin">
		</div>			
			<label>Biaya Materai</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="biaya_materai" id="biaya_materai" class="form-control" onkeyup="hitung()" required type="text" size="30" placeholder="Biaya Materai">
		</div>
			<label>Biaya Asuransi</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="biaya_asuransi" id="biaya_asuransi" class="form-control" onkeyup="hitung()"  required type="text" size="30" placeholder="Biaya Asuransi">
		</div>
			<label>Total Peminjaman</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="total_peminjaman" id="total_peminjaman" class="form-control"  required type="text" size="30" placeholder="Total Peminjaman">
		</div>
			<label>Angsuran</label>
			
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="angsuran" id="angsuran" class="form-control" required type="text" size="30" placeholder="Angsuran">
		</div>
			<label>Jumlah Total</label>
		<div class="form-group input-group">
		<span class="input-group-addon">Rp.</span>
			<input  name="jumlah_total" id="jumlah_total" class="form-control" required type="text" size="30" placeholder="Jumlah Total">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input  name="keterangan" class="form-control"  required type="text" size="30" placeholder="Keterangan">
		</div>
		
		
		<button type="submit" class="btn btn-primary">Simpan</button>
	<button class="btn btn-danger" type="cancel">Cancel</button>

  </form>
</div>

<script>

	function hitung(){
		
		var jumlah_pinjaman = $("#jumlah_asli").val();
		var jangka_waktu = $("#info_ke").val();
		var bunga = $("#bunga").val();
		var biaya_admin = $("#biaya_admin").val();
		var biaya_materai = $("#biaya_materai").val();
		var biaya_asuransi = $("#biaya_asuransi").val();
		
		if(jumlah_pinjaman!="" && bunga!=""){
			var jumlah_bunga = (parseFloat(bunga)*parseFloat(jumlah_pinjaman))/100;
			$("#jumlah_bunga").val(jumlah_bunga.toFixed(2));
			
		}
		if(jumlah_pinjaman!="" && jangka_waktu!="" && bunga !="" && biaya_admin !="" && biaya_materai !=""
			&& biaya_asuransi !=""){
			
			var jumlah_bunga = (parseFloat(bunga)*parseFloat(jumlah_pinjaman))/100;
			var jumlah_pencairan = parseFloat(jumlah_pinjaman)-parseFloat(biaya_admin)-parseFloat(biaya_materai)-parseFloat(biaya_asuransi);
			$("#total_peminjaman").val(jumlah_pencairan.toFixed(2));
			
			var jumlah_bunga = (parseFloat(bunga)*parseFloat(jumlah_pinjaman))/100;
			$("#jumlah_bunga").val(jumlah_bunga.toFixed(2));
			
			var angsuran2 = parseFloat(jumlah_pinjaman)/parseFloat(jangka_waktu);
			//console.log(jumlah_pinjaman);
			//console.log(jangka_waktu);
			var angsuran = parseFloat(angsuran2)+parseFloat(jumlah_bunga);
			//console.log(angsuran);
			$("#angsuran").val(angsuran.toFixed(2));
			
			var total_pengembalian = parseFloat(angsuran)*parseInt(jangka_waktu);
			$("#jumlah_total").val(total_pengembalian.toFixed(2));
			
		}
	}

</script>