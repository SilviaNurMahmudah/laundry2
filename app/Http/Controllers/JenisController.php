<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;

class JenisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $jenis = Jenis::paginate(10);
        $jns = Jenis::count();
        return view('jenis_layanan.jenis',['jenis'=> $jenis, 'jns' => $jns]);
    }
    public function add(){
        $kode = 'jns/001';
        $getId = Jenis::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $kodelama = $p->id;
            $kodebaru = $kodelama+1;
            $kode = 'jns/00'.$kodebaru;
        }
        return view('jenis_layanan.add_jenis', ['kode' => $kode]);
    }
    public function create(Request $request) {
        $kode = 'jns/001';
        $getId = Jenis::orderBy('id', 'DESC')->take(1)->get();
        foreach($getId as $p) {
            $kodelama = $p->id;
            $kodebaru = $kodelama+1;
            $kode = 'jns/00'.$kodebaru;
        }
        Jenis::create([
            'kode' => $kode,
            'nama' => $request->nama,
            'biaya' => $request->biaya,
        ]);
        return redirect("/jenis")->with('status', 'Data berhasil ditambahkan');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis_layanan.edit_jenis',['jenis'=>$jenis]);
    }
    public function update($id, Request $request) {
        $jenis = Jenis::find($id);
        $jenis->kode = $request->kode;
        $jenis->nama = $request->nama;
        $jenis->biaya = $request->biaya;
        $jenis->save();
        return redirect('/jenis')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect("/jenis")->with('status', 'Data berhasil dihapus');
    }
    public function cari(Request $request) {
		$cari = $request->cari;
        $jns = Jenis::count();
        $jenis = Jenis::where('nama','like',"%".$cari."%")->paginate();
        return view('jenis_layanan.jenis',['jenis'=> $jenis, 'jns' => $jns]);
    }
}
