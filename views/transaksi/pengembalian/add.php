<div>
	<form method="POST" action="http://localhost/koperasi/proses/transaksi/pengembalian/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Pengembalian Simpanan<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-12">
		<div class="panel panel-default">
		<div class="panel-heading"> Angsuran</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">

		

		<div class="form-group">
			<label>Anggota</label>
			<select name="id_anggota" id="id_anggota" class="form-control">
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
			
			
		<div class="form-group">
			<label>Pinjaman</label>
			<select name="id_pinjaman" id="id_pinjaman" class="form-control">
				
			</select>
		</div>
		<div class="form-group">
			<label>Angsuran</label>
			<select name="id_angsuran" id="id_angsuran" class="form-control">
				
			</select>
		</div>
			
		
		<label>Jumlah Angsuran</label>
		<div class="form-group">
			<input id="angsuran" class="form-control" type="text" placeholder="Jumlah" name="angsuran" required="" readonly="" tabindex="-1" value="0" autocomplete="off">
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

	function get_pinjaman(){
		
		var id_anggota = $("#id_anggota").val();
		$.ajax({
			url:'http://localhost/koperasi/proses/transaksi/pinjaman/get_pinjaman.php?id='+id_anggota,
			type:'POST',
			dataType:'json',
			success:function(data){
				$("#id_pinjaman").html(data);
			}
		});
		
	}

</script>