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
              <li><a href="#">Dashboard </a></li>
              <li class="active">Status</li>
            </ol>
            
            <div class="box">
              
              <div class="box-header">
                <h3 class="box-title">Data Status
                  <span class="label label-default"></span>
                </h3>
                <form action="/cari-status" method="get"><br/>
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="cari" class="form-control pull-right" placeholder="Cari">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
                            
              <div class="box-body table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Cuci</th>
                      <th>Setrika</th>
                      <th>Packing</th>
                      <th>Selesai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        @php $no=1 @endphp                        
                        @foreach($cuci as $c) 
                        <form class="form-horizontal" method="post" action="/update-status-{{$c->id}}">
                        @csrf                      
                        <input type="hidden" id="status" name="status" value="setrika">
                        <input type="hidden" id="id_pelanggan" name="id_pelanggan" value="{{$c->id_pelanggan}}"> 
                        <input type="hidden" id="id_order" name="id_order" value="{{$c->id}}">
                        <input type="hidden" id="status2" name="status2" value="Laundry sedang dalam proses setrika">                    
                        {{$no++}}. <button type="submit" class="btn btn-info btn-circle" onclick="return confirm('Yakin Ubah Status {{$c->nota}}?')">{{$c->nota}}</button><br><br>
                        </form>
                        @endforeach
                      </td>
                      <td>
                        @php $no=1 @endphp                        
                        @foreach($setrika as $s)                        
                        <form class="form-horizontal" method="post" action="/update-status-{{$s->id}}">
                        @csrf    
                        <input type="hidden" id="status" name="status" value="packing">
                        <input type="hidden" id="id_pelanggan" name="id_pelanggan" value="{{$s->id_pelanggan}}"> 
                        <input type="hidden" id="id_order" name="id_order" value="{{$s->id}}">
                        <input type="hidden" id="status2" name="status2" value="Laundry sedang dalam proses packing">                      
                        {{$no++}}. <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Ubah Status {{$s->nota}} ?')">{{$s->nota}}</button><br><br>
                        </form>              
                        @endforeach
                      </td>
                      <td>
                        @php $no=1 @endphp                        
                        @foreach($pack as $p)                        
                        <form class="form-horizontal" method="post" action="/update-status-{{$p->id}}">
                        @csrf    
                        <input type="hidden" id="status" name="status" value="selesai">
                        <input type="hidden" id="id_pelanggan" name="id_pelanggan" value="{{$p->id_pelanggan}}"> 
                        <input type="hidden" id="id_order" name="id_order" value="{{$p->id}}">
                        <input type="hidden" id="status2" name="status2" value="Laundry telah selesai proses">                   
                        {{$no++}}. <button type="submit" class="btn btn-warning btn-circle" onclick="return confirm('Yakin Ubah Status {{$p->nota}} ?')">{{$p->nota}}</button><br><br>
                        </form>
                        @endforeach
                      </td>
                      <td>
                        @php $no=1 @endphp                        
                        @foreach($done as $d)                        
                        <form class="form-horizontal" method="post" action="/update-status-{{$d->id}}">
                        @csrf    
                        <input type="hidden" id="status" name="status" value="kirimpesan">                   
                        {{$no++}}. <button type="submit" class="btn btn-success btn-circle" onclick="return confirm('Yakin Ubah Status {{$d->nota}}?')">{{$d->nota}}</button><br><br>
                        </form>
                        @endforeach
                      </td>
                    </tr>
                  </tbody>
                </table>
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
  <script>$.widget.bridge('uibutton', $.ui.button);</script>
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