<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $pelanggan = Pelanggan::paginate(10);
        $cust = Pelanggan::count();
        return view('pelanggan.pelanggan',['pelanggan'=> $pelanggan, 'cust' => $cust]);
    }
    public function add(){
        $kode = 'cust/001';
        $getId = Pelanggan::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $kodelama = $p->id;
            $kodebaru = $kodelama+1;
            $kode = 'cust/00'.$kodebaru;
        }
        return view('pelanggan.add_pelanggan',['kode' => $kode]);
    }
    public function create(Request $request) {
        $kode = 'cust/001';
        $getId = Pelanggan::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $kodelama = $p->id;
            $kodebaru = $kodelama + 1;
            $kode = 'cust/00'.$kodebaru;
        }
       
        Pelanggan::create([
            'kode' => $kode,
            'nama' => $request->nama,
            'nohp' => $request->nohp,
        ]);
        return redirect("/pelanggan")->with('status', 'Data berhasil ditambahkan');
    }
    public function edit($id){
        $pelanggan = Pelanggan::find($id);
        return view('pelanggan.edit_pelanggan',['pelanggan'=>$pelanggan]);
    }
    public function update($id, Request $request) {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->nohp = $request->nohp;
        $pelanggan->save();
        return redirect('/pelanggan')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect("/pelanggan")->with('status', 'Data berhasil dihapus');
    }
    public function cari(Request $request) {
		$cari = $request->cari;
        $cust = Pelanggan::count();
        $pelanggan = Pelanggan::where('nama','like',"%".$cari."%")->paginate();        
        return view('pelanggan.pelanggan',['pelanggan'=> $pelanggan, 'cust' => $cust]);
    }
}
