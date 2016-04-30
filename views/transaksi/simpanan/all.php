<?php
$data = $koneksi->prepare("SELECT transaksi.*,anggota.nama FROM transaksi left join anggota on anggota.id=transaksi.id_anggota where jenis_transaksi='Simpanan'");
$data->execute();
$rows = $data->fetchAll();

?>
<div class="row">
	<div class="col-lg-8">
        <h3 class="page-header">Semua Data Simpanan</h3>
    </div>
<!-- /.col-lg-8 -->
</div>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading"> Data Simpanan </div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Simpanan</th>
					<th>Bulan</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
				</tr>
			</thead>
		

<tbody>
	<?php
	$i = 1;
	foreach($rows as $key){
		switch ($key['info_ke']) {
			case 1:$key['info_ke'] = 'Simpanan Pokok';break;
			case 2:$key['info_ke'] = 'Simpanan Wajib';break;
			case 3:$key['info_ke'] = 'Simpanan Sukarela';break;
		}
		switch ($key['bulan']) {
			case 1:$key['bulan'] = 'Januari';break;
			case 2:$key['bulan'] = 'Februari';break;
			case 3:$key['bulan'] = 'Maret';break;
			case 4:$key['bulan'] = 'April';break;
			case 5:$key['bulan'] = 'Mei';break;
			case 6:$key['bulan'] = 'Juni';break;
			case 7:$key['bulan'] = 'Juli';break;
			case 8:$key['bulan'] = 'Agustus';break;
			case 9:$key['bulan'] = 'September';break;
			case 10:$key['bulan'] = 'Oktober';break;
			case 11:$key['bulan'] = 'November';break;
			case 12:$key['bulan'] = 'Desember';break;
		}
	?>	
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $key['nama'];?></td>
			<td><?php echo $key['info_ke'];?></td>
			<td><?php echo $key['bulan']." ".$key['tahun'];?></td>
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