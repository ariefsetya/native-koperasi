<?php
$data = $koneksi->prepare("SELECT * FROM transaksi");
$data->execute();
$rows = $data->fetchAll();

?>
<div class="row">
	<div class="col-lg-8">
        <h3 class="page-header">Semua Data Karyawan</h3>
    </div>
<!-- /.col-lg-8 -->
</div>
<div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading"> Data Karyawan </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Tanggal></th>
					<th>Nama></th>
					<th>Jenis</center></th>
					<th>Jumlah></th>
					<th>Keterangan></th>
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
			<td><a href="http://localhost/koperasi/index.php?m=pengembalian&p=edit&id=<?php echo $key['id'];?>">Edit</a>
			<td><a onclick="return confirm('Yakin hapus?')" href="http://localhost/koperasi/proses/transaksi/pengembalian&p/delete.php?id=<?php echo $key['id'];?>">Delete</a>
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