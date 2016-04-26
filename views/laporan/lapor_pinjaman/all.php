<div>
	<form method="POST" action="http://localhost/koperasi/proses/laporan/pinjaman/save.php" enctype="multipart/form-data">
      
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="page-header">Data Pinjaman<small> Koperasi</small></h3>
                </div>
                <!-- /.col-lg-8 -->
            </div>
	<div class="col-lg-6">
		<div class="panel panel-default">
		<div class="panel-heading"> Pinjaman</div>
		<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">

<section class="content">
<div class="alert alert-success alert-dismissible">
<h4>
<i class="icon fa fa-filter"></i>
Filter Data
</h4>
<hr>
<form class="form-horizontal" method="POST">
<div class="form-group">
<label class="col-sm-2 control-label">Bulan - Tahun</label>
<div class="col-sm-2">
<select class="form-control" name="bulan">
<option value="1">Januari</option>
<option value="2">Februari</option>
<option value="3" selected="">Maret</option>
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
<div class="col-sm-2">
<input class="form-control" type="number" placeholder="Tahun" value="2016" name="tahun" autocomplete="off">
</div>
</div>
<input class="form-control" type="hidden" value="YMZA6ToORrw4Ja0WXnFDbdxAuOT4XOxE6XinK7Zi" name="_token" autocomplete="off">
<div class="form-group">
<label class="col-sm-2 control-label"></label>
<div class="col-sm-10">
<a class="btn btn-warning" href="http://koperasi/laporan/pinjaman">Reset</a>
<button class="btn btn-info" type="submit">Cari</button>
<a class="btn btn-primary" href="http://koperasi/laporan/pinjaman/export/03/2016">Export</a>
</div>
</div>
</form>
</div>
<div class="box">
<div class="box-body no-padding">
<div class="box-header with-border">
<h3 class="box-title">Data Pinjaman Anggota</h3>
</div>
<div class="box-header with-border">
<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
<div class="col-sm-6">
<div id="DataTables_Table_0_length" class="dataTables_length">
<label>
Show
<select class="form-control input-sm" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
<option value="10">10</option>
<option value="25">25</option>
<option value="50">50</option>
<option value="100">100</option>
</select>
entries
</label>
</div>
</div>
<div class="col-sm-6">
<div id="DataTables_Table_0_filter" class="dataTables_filter">
<label>
Search:
<input class="form-control input-sm" type="search" placeholder="" aria-controls="DataTables_Table_0">
</label>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<table id="DataTables_Table_0" class="table for_dttbls dataTable no-footer" role="grid" aria-describedby="DataTables_Table_0_info">
<thead>
<tr role="row">
<th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Nama</th>
<th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Jenis</th>
<th class="text-center" colspan="2" rowspan="1">Angsuran</th>
<th class="text-center" colspan="2" rowspan="1">Total</th>
<th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Status</th>
<th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Jatuh Tempo</th>
<th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1">Jangka Waktu</th>
</tr>
</thead>
<tbody> </tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<div id="DataTables_Table_0_info" class="dataTables_info" role="status" aria-live="polite"></div>
</div>
<div class="col-sm-7">
<div id="DataTables_Table_0_paginate" class="dataTables_paginate paging_simple_numbers"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>