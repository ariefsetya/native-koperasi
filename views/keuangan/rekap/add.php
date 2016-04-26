<div>
	<form method="POST" action="http://localhost/koperasi/proses/keuangan/rekap/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Rekap Keuangan<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-6">
		<div class="panel panel-default">
		<div class="panel-heading"> Rekap Keuangan</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">




		<div class="box-body with-border">
		<div class="alert alert-success alert-dismissible">
			<h4><i class="icon fa fa-filter"></i>Filter Data</h4>
		<hr>
			<form class="form-horizontal" action="http://localhost/views/koperasi/keuangan/rekap" method="POST">
			<div class="form-group">

		<label>Nama</label>
			<div class="col-sm-10">
				<input id="nama" class="form-control ui-autocomplete-input" type="text" value="" placeholder="Nama" name="nama" autocomplete="off">
				<input id="id_anggota" class="form-control" type="hidden" value="" name="id_anggota" autocomplete="off">
			</div>

		<label>Tanggal</label>
			<div class="col-sm-10">
				<input id="tanggal" class="form-control datepicker" type="text" placeholder="Tanggal Awal - Tanggal Akhir" value="" name="tanggal" autocomplete="off">
			</div>
			<input class="form-control" type="hidden" value="D2P6bv6mFym9iXaV6pOutL55g45i7Vyuqi875CfH" name="tanggal" autocomplete="off">

		<label class="col-sm-2 control-label"></label>
			<div class="col-sm-10">
				<a class="btn btn-warning" href="http://localhost/koperasi/keuangan/rekap/clear">Reset</a>
				<button class="btn btn-info" type="submit">Cari</button>
				<a class="btn btn-primary" href="http://localhost/koperasi/keuangan/rekap/export">Export</a>
			</div>
			
			</div>
			</form>
		</div>
</div>
</div>
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