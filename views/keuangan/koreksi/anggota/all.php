<?php
$data = $koneksi->prepare("SELECT * FROM keuangan");
$data->execute();
$rows = $data->fetchAll();

?>
<div class="row">
	<div class="col-lg-8">
        <h3 class="page-header">Semua Data Keuangan</h3>
    </div>
<!-- /.col-lg-8 -->
</div>
<div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading"> Data Keuangan Anggota </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th><center>Tanggal</center></th>
					<th><center>Nama</center></th>
					<th><center>Jenis Simpanan</center></th>
					<th><center>Jumlah</center></th>
					<th><center>Keterangan</center></th>
					<th colspan=2><center>Action</center></th>
				</tr>
			</thead>
		

<tbody>
	<?php
	$i = 1;
	foreach($rows as $key){
	?>	
		<tr>
			<td><?php echo $i;?>
			<td><?php echo $key['nama'];?>
			<td><a href="http://localhost/koperasi/index.php?m=koreksi&p=anggota&p=edit&id=<?php echo $key['id'];?>">Edit</a>
			<td><a onclick="return confirm('Yakin hapus?')" href="http://localhost/koperasi/proses/keuangan/koreksi/angggota&p/delete.php?id=<?php echo $key['id'];?>">Delete</a>
		</tr>
	<?php
	$i++;
	}
	?>
</tbody>
</table>

		</div>
		</div>
		</div>
	</div>
</div>