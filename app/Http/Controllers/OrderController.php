<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Pelanggan;
use App\Jenis;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $cuci = Order::where('status','=','cuci')->count();
        $setrika = Order::where('status','=','setrika')->count();
        $pack = Order::where('status','=','packing')->count();
        $done = Order::where('status','=','selesai')->count();
        $ord = Order::count();
        $cust = Pelanggan::count();
        $jns = Jenis::count();
        return view(
            'dashboard', 
            ['cuci' => $cuci,
            'setrika' => $setrika,
            'pack' => $pack,
            'done' => $done, 
            'ord' => $ord,
            'cust' => $cust,
            'jns' => $jns
            ]
        );
    }
    public function getAll(){        
        $order = Order::join('pelanggans', 'pelanggans.id','=','orders.id_pelanggan')->paginate(10);        
        $ord = Order::count();
        return view(
            'order.order_data',
            ['order'=> $order, 
            'ord' => $ord]
        );
    }
    public function getById($id){
        $order = Order::with('pelanggan','jenis');
        $order = Order::find($id);
        return view('order.order_detail',['order'=> $order],['id'=> $id]);
    }
    public function add(){
        $order = Order::join('jenis', 'jenis.id','=','orders.id_jenis')->get();
        $pelanggan = Pelanggan::all();
        $jenis = Jenis::all();

        $nota = 'nota/001';
        $getId = Order::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $notalama = $p->id;
            $notabaru = $notalama+1;
            $nota = 'nota/00'.$notabaru;
        }
    
        return view(
            'order.add_order',
            ['order'=> $order,
            'pelanggan'=> $pelanggan,
            'jenis'=> $jenis,
            'nota' => $nota]
        );
    }
    public function create(Request $request) {
        $nota = 'nota/001';
        $getId = Order::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $notalama = $p->id;
            $notabaru = $notalama+1;
            $nota = 'nota/00'.$notabaru;
        }

        Order::create([
            'nota' => $nota,
            'id_jenis' => $request->id_jenis,
            'id_pelanggan' => $request->id_pelanggan,
            'berat' => $request->berat,
            'total' => $request->total,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'tgl_deadline' => $request->tgl_deadline,
            'wkt_deadline' => $request->wkt_deadline,
        ]);
        return redirect("/order-data")->with('status', 'Data berhasil ditambahkan');
    }
    public function getJenis(Request $request) {
        $id_jenis = $request->id_jenis;
        $data = Jenis::where('id', $id_jenis)->get();
        return response()->json($data, 200);
    }
    public function cari(Request $request) {
		$cari = $request->cari;
        $ord = Order::count();
        $order = Order::where('nota','like',"%".$cari."%")->paginate();        
        return view('order.order_data',['order'=> $order, 'ord' => $ord]);
    }
    public function cetaknota($id){
        $order = Order::with('pelanggan','jenis');
        $order = Order::find($id);
        return view('order.cetak_nota',['order'=> $order],['id'=> $id]);
    }
    public function laporan() {
        return view('order.laporan');
    }
    public function cetakLaporan($tglawal , $tglakhir) {
        $cetak = Order::with('pelanggan','jenis')->whereBetween('created_at', [$tglawal , $tglakhir])->get();
        return view('order.cetak_laporan',['cetak'=>$cetak],['tglawal'=>$tglawal,'tglakhir'=>$tglakhir]);
    }
}
