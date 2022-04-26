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

            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Data order</h3>
              </div>

              <div class="box-body">
                <div class="table-responsive">
                  <div id="main">
                    <div class="container-fluid">

                      <form class="form-horizontal" method="post" action="{{ route('create-order') }}" id="Myform" class="form-user">
                        @csrf
                        <div class="box-body">

                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-default">
                                <div class="box-body">
                                  <div class="row">

                                    <div class="col-sm-2">
                                      <label for="kode">Nota:</label>
                                      <input type="text" class="form-control" id="nota" name="nota" value="{{$nota}}" maxlength="50" required readonly>
                                    </div>

                                    <div class="col-sm-4">
                                      <label for="usr">Pelanggan</label>
                                      <select class="form-control select2" style="width: 100%;" name="id_pelanggan" id="id_pelanggan" required>
                                        <option></option>
                                        @foreach($pelanggan as $p)
                                        <option value="{{$p->id}}">{{$p->nama}}</option>
                                        @endforeach                                    
                                      </select>
                                    </div>
                                    
                                  </div>                    
                                </div>                  
                              </div>                
                            </div>              
                          </div>
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-default">
                                <div class="box-body">
                                  <div class="row">

                                    <div class="col-sm-2">
                                      <label for="usr">Nama Layanan</label>                                   
                                      <input type="text" class="form-control" id="nama" name="nama" value="" readonly>
                                    </div>

                                    <div class="col-sm-4">
                                      <label for="usr">Layanan:</label>
                                      <select class="form-control select2" style="width: 100%;" name="id_jenis" id="id_jenis" required>
                                        <option></option>
                                        @foreach($jenis as $j)
                                        <option value="{{$j->id}}">{{$j->nama}}</option>
                                        @endforeach
                                      </select>
                                    </div>

                                  </div>                    
                                </div>                  
                              </div>                
                            </div>              
                          </div>
                          
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-default">
                                <div class="box-body">
                                  <div class="row">

                                    <div class="col-sm-2">
                                      <label for="usr">Biaya</label>
                                      <input type="text" class="form-control" id="biaya" name="biaya" readonly>
                                    </div>

                                    <div class="col-sm-2">
                                      <label for="usr">Berat (Kg)</label>
                                      <input type="text" class="form-control" id="berat" name="berat" value="0" placeholder="0" onkeyup="sum();">
                                    </div>

                                    <div class="col-md-4">
                                      <div class="box" style="background-color:#EEEEEE">
                                        <div class="box-body">
                                          <div class="row" >
                                           <div class="form-group col-md-12 col-xs-12" >
                                            <div class="col-sm-12" >
                                              <label for="usr">Total</label>
                                              <input type="text" class="form-control" id="total" name="total" readonly>                                                                              
                                            </div>
                                            <div class="col-sm-12" >
                                              <input type="hidden" class="form-control" id="status" name="status" value="cuci">                                
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                  </div></br>                                  
                                </div>
                              </div>
                            </div>
                          </div>                        
                        </div>
                        
                        <div class="row" >
                          <div class="col-md-12">
                            <div class="box box-solid" >
                              <div class="box-header with-border"> 

                                <div class="col-sm-2">
                                  <label for="usr">Deadline</label>
                                  <input type="text" class="form-control pull-right" id="datepicker3" name="tgl_deadline" placeholder="<?php echo date("Y-m-d");?>">
                                </div>

                                <div class="col-sm-2">
                                  <label for="usr">Waktu</label>
                                  <input type="text" class="form-control" id="wkt_deadline" name="wkt_deadline" maxlength="5" placeholder="<?php echo date("H:i");?>">
                                </div>

                                <div class="col-sm-2">
                                  <label for="usr">Catatan</label>
                                  <input type="text" class="form-control" id="catatan" name="catatan" placeholder="Masukan Catatan" maxlength="255">
                                </div>

                                <div class="col-sm-3">
                                  <label for="usr" style="color:transparent">.</label>
                                  <button type="submit" class="btn btn-block pull-left btn-flat btn-success" name="simpan" onclick="SubmitForm()" >Proses Order</button>
                                </div>

                              </div>
                            </div>
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
          <div class="row"></div>
        </div>
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
  <script>
    $(document).on('change', '#id_jenis', function() {
      cariJenis($(this).val());
    })
    function cariJenis(id_jenis) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        
        url: "{{route('cariJenis')}}",
        type: "post",
        data: {
          id_jenis : id_jenis,
        },success: function(res) {
          $('#nama').val(res[0].nama);
          $('#biaya').val(res[0].biaya);          
          console.log(res);
        },error: function (xhr) {
          console.error(xhr);
        }
      });
    }

    $(document).on('blur', '#biaya', function() {
      let biaya = parseInt($('#biaya').val());
      let berat = parseInt($('#berat').val());
      $('#total').val(biaya * berat);
    });
    $(document).on('blur', '#berat', function() {
      let biaya = parseInt($('#biaya').val());
      let berat = parseInt($(this).val());
      $('#total').val(biaya * berat);
    });
    function sum() {
      var txtFirstNumberValue =  document.getElementById('berat').value
      var txtSecondNumberValue = document.getElementById('biaya').value;
      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
      if (!isNaN(result)) {
        document.getElementById('total').value = result;
      }
      if (!$(berat).val()){
        document.getElementById('total').value = "0";
      }
    }
  </script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2({
        placeholder: "Silakan pilih salah satu"
      });

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy/mm/dd"});
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("yyyy-mm-dd", {"placeholder": "yyyy/mm/dd"});
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm A'});
      //Date range as a button
      $('#daterange-btn').daterangepicker(
      {
        ranges: {
          'Hari Ini': [moment(), moment()],
          'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Akhir 7 Hari': [moment().subtract(6, 'days'), moment()],
          'Akhir 30 Hari': [moment().subtract(29, 'days'), moment()],
          'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
          'Akhir Bulan': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      );
        //Date picker
        $('#datepicker').datepicker({
          autoclose: true
        });

        $('.datepicker').datepicker({
          dateFormat: 'yyyy-mm-dd'
        });

        //Date picker 2
        $('#datepicker2').datepicker('update', new Date());

        $('#datepicker2').datepicker({
          autoclose: true
        });

        $('.datepicker2').datepicker({
          dateFormat: 'yyyy-mm-dd'
        });

        //Date picker 3

     $('#datepicker3').datepicker({
      autoclose: true
    });

     $('.datepicker3').datepicker({
      dateFormat: 'yyyy-mm-dd'
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>