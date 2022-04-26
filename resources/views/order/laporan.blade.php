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

            <ol class="breadcrumb ">
              <li><a href="{{ route('dashboard') }}">Dashboard </a></li>
              <li class="active">Laporan</li>
            </ol>

            <div class="box">
              
              <div class="box-header">
                <h3 class="box-title">Cetak Laporan Data Order
                  <span class="label label-default"></span>
                </h3>              
              </div>
              
              <div class="box-body table-responsive">
                <div class="input-group mb-3">
                  <label for="label">Tanggal Awal</label>
                  <input type="date" name="tglawal" id="tglawal" class="form-control" />
                </div>
                <div class="input-group mb-3">
                  <label for="label">Tanggal Akhir</label>
                  <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                </div><br>
                <div class="input-group mb-3">
                  <a href="" target="_blank" class="btn btn-primary"
                    onclick="this.href='/cetak-laporan/' + document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value">
                    <i class="fa fa-print"></i> Cetak
                  </a>
                </div>                
                <div align="right"></div>
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
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.misn.js"></script>
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
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="dist/plugins/fastclick/fastclick.js"></script>
 </body>
</html>