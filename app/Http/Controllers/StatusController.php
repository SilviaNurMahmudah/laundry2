<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Order;
use App\Status;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function status(){
        $cuci = Order::where('status','=','cuci')->orderBy('updated_at','ASC')->get();
        $setrika = Order::where('status','=','setrika')->orderBy('updated_at','ASC')->get();
        $pack = Order::where('status','=','packing')->orderBy('updated_at','ASC')->get();
        $done = Order::where('status','=','selesai')->orderBy('updated_at','ASC')->get();
        return view(
            'status.status', 
            ['cuci'=> $cuci,
            'setrika'=> $setrika,
            'pack'=> $pack,
            'done'=> $done]
        );
    }
    public function update($id, Request $request) {
        $status = Order::find($id);
        $status->status = $request->status;
        $status->save();
        Status::create([
            'id_pelanggan' => $request->id_pelanggan,
            'id_order' => $request->id_order,
            'status' => $request->status2,
        ]);
        return redirect('/status');
    }
    public function cari(Request $request) {
        $cari = $request->cari;
        $order = Order::where('nota','like',"%".$cari."%")->paginate();
        $cuci = Order::where('nota','like',"%".$cari."%")->where('status','=','cuci')->orderBy('updated_at','ASC');
        $setrika = Order::where('nota','like',"%".$cari."%")->where('status','=','setrika')->orderBy('updated_at','ASC');
        $pack = Order::where('nota','like',"%".$cari."%")->where('status','=','packing')->orderBy('updated_at','ASC');
        $done = Order::where('nota','like',"%".$cari."%")->where('status','=','selesai')->orderBy('updated_at','ASC');
                
        return view(
            'status.status', 
            ['cuci'=> $cuci,
            'setrika'=> $setrika,
            'pack'=> $pack,
            'done'=> $done, 'order'=> $order]
        );
    }
}
