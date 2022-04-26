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
            <li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>
          </ol>
        </div>
      </div>
        <div class="row">

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><small style="color:white">{{$ord}} Data</small></h3>
                <p>Laundry</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="{{ route('order') }}">  
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><small style="color:white">{{$cust}} Data</small></h3>
                <p>Pelanggan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="#">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><small style="color:white">{{$jns}} Data</small></h3>
                <p>Jenis Laundry</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-blackboard"></i>
              </div>
              <form align="center" method="post" action="">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div>
          </div>
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><small style="color:white">--- Data</small></h3>
                <p>Komplain</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-folder-close"></i>
              </div>
              <form align="center" method="post" action="">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div>
          </div>

        </div>
        <div class="row">
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><small style="color:white">{{$cuci}} laundry</small></h3>
                <p>Dalam Proses Cuci</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="{{ route('order') }}">  
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><small style="color:white">{{$setrika}} Laundry</small></h3>
                <p>Dalam Proses Setrika</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <form align="center" method="post" action="#">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></button>    
              </form>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><small style="color:white">{{$pack}} Laundry</small></h3>
                <p>Dalam Proses Packing</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-blackboard"></i>
              </div>
              <form align="center" method="post" action="">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div>
          </div>
          
          <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><small style="color:white">--- Data</small></h3>
                <p>---</p>
              </div>
              <div class="icon">
                <i class="glyphicon glyphicon-folder-close"></i>
              </div>
              <form align="center" method="post" action="">
                <button style="background-color: Transparent;border: none;" type="submit" name="search" class="small-box-footer">info Lengkap <i class="fa fa-arrow-circle-right"></i></button>
              </form>
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