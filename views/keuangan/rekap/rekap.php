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
                  <h4><i class="icon fa fa-filter"></i> Filter Data</h4>
                  <hr>
                  <form class="form-horizontal" method="POST" action="http://localhost/views/koperasi/keuangan/rekap">

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
                    <input type="hidden" id="id_anggota" class="form-control" name="id_anggota">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <input type="text" id="tanggal" class="form-control datepicker" name="tanggal" date_format(date_create,"m/d/Y")." - ".date_format(date_create(session('tgl1')),"m/d/Y"):""}}" placeHolder="Tanggal Awal - Tanggal Akhir">
                  </div>
                </div>
                <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>

                  <div class="col-sm-10">
                    <a href="{{url('keuangan/rekap/clear')}}" class="btn btn-warning">Reset</a>
                    <button type="submit" class="btn btn-info">Cari</button>
                    <a href="{{url('keuangan/rekap/export')}}" class="btn btn-primary">Export</a>
                  </div>
                </div>
            </form>
                </div>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
  $(function() {
    $('.datepicker').daterangepicker();
          $("#nama").autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: "{{url('ajax/get_anggota')}}/"+$("#nama").val(),
            dataType: "json",
            success: function( data ) {
              response( data );
            }
          });
        },
        minLength: 1,
        select: function( event, ui ) {
          $("#nama").val(ui.item.label);
          $("#id_anggota").val(ui.item.id);
        }
      });
  });
      function buka_rekap (id) {
        if($("#rekap_"+id).css('display')=="none"){
          $("#rekap_"+id).css('display','table-row');
        }else{
          $("#rekap_"+id).css('display','none');
        }
      }
  </script>