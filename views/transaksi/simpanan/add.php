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
			</select>		</div>
		
		<label>Jenis Simpanan</label>
		<div class="form-group">
			<select name="id_jenis" id="id_jenis" class="form-control" required="" type="text">
				<option value="" readonly="">--Pilih Jenis Simpanan--</option>
				<option value="1">Simpanan Pokok</option>
				<option value="2">Simpanan Wajib</option>
				<option value="3">Simpanan Sukarela</option>
			</select>
		</div>
		
		<label>Bulan</label>
		<div class="form-group">
			<select  name="bulan" id="bulan" class="form-control" required type="text">
				<option value="" readonly="">--Pilih Bulan--</option>
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

		<label>Tahun</label>
		<div class="form-group">
			<input id="tahun" class="form-control" type="text" placeholder="Tahun" name="tahun" required="" value="<?php echo date("Y");?>" autocomplete="off">
		</div>
		<label>Jumlah</label>
		<div class="form-group">
			<input id="jumlah_total" class="form-control" type="text" placeholder="Jumlah" name="jumlah_total" required="" value="0" autocomplete="off">
		</div>
		
		<label>Keterangan</label>
		<div class="form-group">
			<textarea  name="keterangan" id="keterangan" class="form-control" type="text"></textarea>
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>
		<button class="btn btn-danger" type="cancel">Cancel</button>

  </form>
</div>