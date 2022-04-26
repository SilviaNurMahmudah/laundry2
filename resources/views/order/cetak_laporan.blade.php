<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="dist/plugins/print/one.css">
<title>Cetak Laporan</title>
<body>
  <div class="box">
    <h2 align="center"><b>Laporan Data Order</b></h2>
    <p align="center">Periode Tanggal ({{$tglawal}}) - ({{$tglakhir}})</p>
    <table class="static" align="center" rules="all" border="1px" style="width: 90%;">
      <tr>
        <th>No</th>
        <th>Nota</th>
        <th>Nama Pelanggan</th>
        <th>Jenis Laundry</th>
        <th>Total Pembayaran</th>
      </tr>
      @foreach($cetak as $o)
      <tr align="center">
        <td>{{$loop->iteration}}</td>
        <td>{{$o->nota}}</td>
        <td>{{$o->pelanggan->nama}}</td>
        <td>{{$o->jenis->nama}}</td>
        <td>{{$o->total}}</td>                   
      </tr>
      @endforeach
    </table>
  </div>  
  <script type="text/javascript">
    window.print();
  </script>    
</body>
</html>