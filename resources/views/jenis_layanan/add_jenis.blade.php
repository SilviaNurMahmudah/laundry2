<!DOCTYPE html>
<html lang="en"> 
@extends('core.head');
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">
		@extends('core.theader');
		@extends('core.menu');
		<div class="content-wrapper">
				<section class="content-header"></section>
				<section class="content">
						<div class="row">
								<div class="col-lg-12">

										<ol class="breadcrumb">
											<li><a href="{{ route('dashboard') }}">Dashboard </a></li>
											<li><a href="{{ route('jenis') }}">Jenis Layanan </a></li>
											<li class="active">Data Jenis</li>
										</ol>

										<div class="box box-default">
												<div class="box-header with-border">
														<h3 class="box-title">Data Jenis</h3>
												</div>
												<div class="box-body">
														<div class="table-responsive">
																<div id="main">
																		<div class="container-fluid">
																				<form class="form-horizontal" method="post" action="{{ route('create-jenis') }}">
																						@csrf
																						<div class="box-body">
																								<div class="row">
																										<div class="form-group col-md-6 col-xs-12" >
																												<label for="kode" class="col-sm-3 control-label">Kode :</label>
																												<div class="col-sm-9">
																														<input type="text" class="form-control" id="kode" name="kode" value="{{$kode}}" maxlength="50" required readonly>
																												</div>
																										</div>
																								</div>
																								<div class="row">
																										<div class="form-group col-md-6 col-xs-12" >
																												<label for="nama" class="col-sm-3 control-label">Nama :</label>
																												<div class="col-sm-9">
																														<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Jenis Layanan" maxlength="50" required>
																												</div>
																										</div>
																								</div>
																								<div class="row">
																										<div class="form-group col-md-6 col-xs-12" >
																												<label for="nama" class="col-sm-3 control-label">Biaya :</label>
																												<div class="col-sm-9">
																														<input type="text" class="form-control" id="biaya" name="biaya" placeholder="Masukan Biaya Jenis Layanan" maxlength="20" required>
																												</div>
																										</div>
																								</div>
																								<div class="box-footer" >
																										<button type="submit" class="btn btn-default pull-left btn-flat" name="add"  ><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
																								</div>
																						</div>
																				</form>
																		</div>
																		<script>
																			function myFunction() {
																				document.getElementById("Myform").submit();
																			}       
																		</script>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
						<div class="row"></div>
				</section> 
		</div>
		@extends('core.footer');
		<div class="control-sidebar-bg"></div>
</div>
<script src="dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
		$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="dist/plugins/morris/morris.min.js"></script>
<script src="dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="dist/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="dist/plugins/daterangepicker/daterangepicker.js"></script>
<script src="dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="dist/plugins/fastclick/fastclick.js"></script>
<script src="dist/plugins/select2/select2.full.min.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="dist/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="dist/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="dist/plugins/iCheck/icheck.min.js"></script>
</body>
</html>