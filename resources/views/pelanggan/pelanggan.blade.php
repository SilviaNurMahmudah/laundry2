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
              <li class="active">Pelanggan</li>
            </ol>
            
            @if(session('status'))
              <div id="myAlert" class="alert alert-success alert-dismissible fade in">
                {{session('status')}}
              </div>
            @endif
            
            <div class="box">
              
              <div class="box-header">
                <h3 class="box-title">Data pelanggan
                  <span class="label label-default">{{$cust}}</span>
                </h3>
                <form action="/cari-pelanggan" method="get"><br/>
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="cari" class="form-control pull-right" placeholder="Cari">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              
              <div class="box-body table-responsive">
                <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pelanggan</th>
                      <th>Nama</th>
                      <th>No. Telp</th>
                      <th>opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pelanggan as $key => $p)
                    <tr>
                      <td>{{$pelanggan->firstItem()+$key}}</td>
                      <td>{{$p->kode}}</td>
                      <td>{{$p->nama}}</td>
                      <td>{{$p->nohp}}</td>
                      <td>
                        <button type="button" class="btn btn-success btn-xs btn-flat" onclick="window.location.href='/edit-pelanggan-{{$p->id}}'"><i class="fa fa-edit"></i> Edit</button>
                        <a href="/delete-pelanggan-{{$p->id}}">
                          <button type="button" class="btn btn-danger btn-xs btn-flat" onclick="return confirm('Yakin Hapus Data ?') "><i class="fa fa-trash"></i> Hapus</button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>                
                <div align="right"></div>
                <div>Showing {{$pelanggan->firstItem()}} to {{$pelanggan->lastItem()}} of {{$pelanggan->total()}}</div>
                <div>{{$pelanggan->links()}}</div>
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
  <script>
    window.setTimeout(function() {
      $("#myAlert").fadeTo(500, 0).slideUp(1000, function(){
        $(this).remove();
      });
    }, 5000);
  </script>
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