<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="dist/plugins/print/one.css">
<title>Cetak Nota</title>

<table class="table-header">
  <tr><td colspan="6" class="nama" style="font-size:16px; font-weight:bold; width:240px">Aya Laundry</td></tr>
  <tr><td colspan="6" style="font-style:italic; width:240px;">Laundry & Dry Clean</td></tr>
  <tr><td colspan="6" style="width:240px;">Jl Ikhwan Hadi No. 55, 57 Ngaglik Kota Batu</td></tr>
  <tr><td colspan="6" style="border-bottom:double 4px #000; padding-bottom:5px;width:240px;">085649797686</td></tr>
</table>

<table class="table-print">
  <tr class="spa">
    <td width="20%" style="width:48px;">&nbsp;</td>
    <td width="15%" style="width:28.8px;">&nbsp;</td>
    <td width="20%"  style="width:43.2px;">&nbsp;</td>
    <td width="18%"  style="width:48px;">&nbsp;</td>
    <td width="18%"  style="width:60px;">&nbsp;</td>
    <td width="8%"  style="width:12px;">&nbsp;</td>
  </tr>
  <tr>
  </tr>

  <tr >
    <td style="width:192px;" colspan="6" align="center"><h2>{{$order->nota}}</h2></td>
  </tr>
  <tr >
    <td style="width:192px;" colspan="6" align="left">Tgl Transaksi : {{$order->created_at}} </td>
  </tr>
  <tr>
   <td style="width:192px;" colspan="6" align="left">Pelanggan : <b>{{$order->pelanggan->nama}}</b></td>
 </tr>
 <tr>
  <td style="width:192px;" colspan="6" align="left">{{$order->pelanggan->nohp}}</td>
</tr>
<tr class="siv solid">
 <td colspan="6" style="width:240px;">
   <div class="solid-border" ></div>
 </td>
</tr>

  <tr>
    <td colspan="6" style="width:240px;">{{$order->jenis->nama}}</td>
  </tr>

  <tr>

    <td colspan="2" style="width:76.8px;">Qty : </td>
    <td style="width:43.2px;">{{$order->berat}}</td>
    <td style="width:58px;" align="right">x{{$order->jenis->biaya}}</td>
    <td style="width:62px;" colspan="2" align="right">{{$order->total}}</td>
  </tr>

  <tr class="siv">
    <td colspan="5" style="width:228px;">
      <div class="dotted-border"></div>	</td>
      <td style="width:12px;">(+)	</td>
    </tr>
  <tr>
   <td colspan="2" style="width:76.8px;">Total Qty</td>
   <td style="width:43.2px;"></td>
   <td style="width:48px;"><b>Total</b></td>
   <td style="width:72px;" colspan="2" align="right"><b>{{$order->total}}</b></td>
 </tr>

 <tr class="siv solid">
   <td colspan="6" style="width:240px;">
     <div class="solid-border" ></div>
   </td>
 </tr>

 <tr class="siv solid">
   <td colspan="6" style="width:240px;">
     <div class="solid-border" ></div>
   </td>
 </tr>

 <tr>
   <td style="width:240px;" colspan="6"><pre  style="white-space: pre-line;">
    Terima Kasih
    <pre></td>
    </tr>
    <tr class="terakhir">
     <td style="width:240px;" colspan="6"></td>
   </tr>
</table>
<script>
  setTimeout(function(){window.print()}, 2000);
</script>
