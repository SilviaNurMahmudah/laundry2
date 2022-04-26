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
              <li class="active">Order Detail</li>
            </ol>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="box">

             <div class="box-header">
               <h3 class="box-title">Informasi Nota {{$order->nota}}
                 <span class="label label-danger">{{$order->status}}</span>
               </h3>
             </div>

             <div class="box-body table-striped">

              <div class="form-group col-md-12 col-xs-12" >
                <label for="nama" class="col-sm-4 control-label" id="nama" >Nama Pelanggan :</label>
                <div class="col-sm-8" id="nama" name="nama">{{$order->pelanggan->nama}}</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Tanggal Transaksi :</label>
                <div class="col-sm-8">{{$order->created_at}}</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Deadline Transaksi :</label>
                <div class="col-sm-8">{{$order->tgl_deadline}} / {{$order->wkt_deadline}}</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Jenis Transaksi :</label>
                <div class="col-sm-8">{{$order->jenis->nama}}</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Berat :</label>
                <div class="col-sm-8">{{$order->berat}} kg</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Total Transaksi :</label>
                <div class="col-sm-8">{{$order->total}}</div>
              </div>

              <div class="form-group col-md-12 col-xs-12" >
                <label for="trx" class="col-sm-4 control-label">Catatan Transaksi :</label>
                <div class="col-sm-8">{{$order->catatan}}</div>
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
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="dist/js/demo.js"></script>
  <script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="dist/plugins/fastclick/fastclick.js"></script>
</body>
</html>
