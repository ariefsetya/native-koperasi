<div>
	<form method="POST" action="http://localhost/koperasi/proses/keuangan/koreksi/anggota/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Keuangan Anggota<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-6">
		<div class="panel panel-default">
		<div class="panel-heading"> Keuangan</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">



		<label>Tanggal</label>
		<div class="col-sm-10">
			<input id="tanggal" class="form-control" type="text" value="26/02/2016 09:00:59" name="created_at" required="" readonly="" autocomplete="off">
		</div>

		<label>Nama</label>
		<div class="col-sm-10">
			<input id="nama" class="form-control ui-autocomplete-input" type="text" placeholder="Nama" name="nama" required="" autocomplete="off">
			<input id="id_anggota" class="form-control" type="hidden" value="0" name="id_anggota" required="" autocomplete="off">
		</div>

		<label>Jumlah Uang Masuk</label>
		<div class="col-sm-10">
		<div id="jumlah_total" class="form-control for_numberinput jqx-input jqx-rc-all jqx-widget jqx-widget-content jqx-numberinput" role="spinbutton" data-role="input" aria-valuenow="0" aria-valuemin="-99999999" aria-valuemax="1e+33" aria-disabled="false" aria-multiline="false" style="height: 39px; width: 226px;">
			<input class="jqx-input-content jqx-widget-content" type="textarea" autocomplete="off" style="padding: 4px 0px; border-width: 0px; text-align: right; height: 18px; width: 198px;">
		</div>
			<input id="jumlah_total" class="form-control" type="hidden" placeholder="Jumlah" name="jumlah_total" required="" value="0" autocomplete="off">
		</div>

		<label>Keterangan</label>
		<div class="col-sm-10">
			<textarea class="form-control" placeholder="Keterangan" name="keterangan" type="text"></textarea>
		</div>
			<input class="form-control" type="hidden" value="D2P6bv6mFym9iXaV6pOutL55g45i7Vyuqi875CfH" name="_token" autocomplete="off">
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