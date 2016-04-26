<?php
$data = $koneksi->prepare("SELECT transaksi.*,anggota.nama 
							FROM transaksi left join anggota on anggota.id=transaksi.id_anggota 
							where jenis_transaksi='Pinjaman'");
$data->execute();
$rows = $data->fetchAll();

?>
<div class="row">
	<div class="col-lg-8">
        <h3 class="page-header">Semua Data Pinjaman</h3>
    </div>
<!-- /.col-lg-8 -->
</div>
<div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading"> Data Pinjaman </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Waktu</th>
					<th>Status</th>
				</tr>
			</thead>
		

<tbody>
	<?php
	$i = 1;
	foreach($rows as $key){
	?>	
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $key['nama'];?></td>
			<td><?php echo $key['info_ke'];?></td>
			<td><?php echo $key['status'];?></td>
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