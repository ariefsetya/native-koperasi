<div>
	<form method="POST" action="http://localhost/koperasi/proses/transaksi/simpanan/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Tambahan Simpanan<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"> Simpanan Baru </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">

		
			<label>Nama</label>
		<div class="form-group">
			<input  name="nama" id="nama" class="form-control" type="text" placeholder="Nama" name="nama" required="" autocomplete="off">
		</div>
		
		<label>Jenis Simpanan</label>
		<div class="form-group">
			<select name="id_jenis" id="id_jenis" class="form-control" required="" type="text">
				<option value="" readonly="">Jenis Simpanan</option>
				<option value="1">Simpanan Pokok</option>
				<option value="2">Simpanan Wajib</option>
				<option value="3">Simpanan Sukarela</option>
			</select>
		</div>
		
		<label>Bulan</label>
		<div class="form-group">
			<select  name="bulan" id="bulan" class="form-control" required type="text">
				<option value="" readonly="">Bulan</option>
				<option value="1">Januari</option>
				<option value="2">Februari</option>
				<option value="3">Maret</option>
				<option value="4">April</option>
				<option value="5">Mei</option>
				<option value="6">Juni</option>
				<option value="7">Juli</option>
				<option value="8">Agustus</option>
				<option value="9">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select>
		</div>

		<label>Jumlah</label>
		<div class="">
			<input id="jumlah_total" class="form-control" type="hidden" placeholder="Jumlah" name="jumlah_total" required="" value="0" autocomplete="off">
		</div>
		
		<div id="jumlah_div">
			<input class="form-control" >
		</div>
		
		<label>Keterangan</label>
		<div class="form-group">
			<textarea  name="keterangan" id="keterangan" class="form-control" type="text"></textarea>
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