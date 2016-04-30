<?php
$data = $koneksi->prepare("SELECT transaksi.*,anggota.nama FROM transaksi left join anggota on anggota.id=transaksi.id_anggota where status='Lunas' and jenis_transaksi='Angsuran'");
$data->execute();
$rows = $data->fetchAll();

?>
<div class="row">
	<div class="col-lg-8">
        <h3 class="page-header">Data Pengembalian Pinjaman</h3>
    </div>
<!-- /.col-lg-8 -->
</div>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading"> Data Angsuran Lunas </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Bulan ke</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
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
			<td><?php echo "Rp. ".number_format($key['jumlah_total'],2);?></td>
			<td><?php echo $key['keterangan'];?></td>
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