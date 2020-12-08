<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Buku;

use File;



class BukuController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    public function index(){
        // $data_buku = Buku::all()->sortByDesc('tgl_terbit');
        // $no = 0;

        // return view('buku.index', compact('data_buku', 'no'));
        $batas = 5;
        $jumlah_buku = Buku::count();
        $data_buku = Buku::orderBy('tgl_terbit','desc')->paginate($batas);
        $no = $batas *($data_buku->currentPage()-1);

        return view('buku.index', compact('data_buku','no','jumlah_buku'));
    }

    public function search(Request $request){
        $batas = 5;
        $cari = $request->kata;
        $data_buku = Buku::where('judul','like',"%".$cari."%")->orwhere('penulis','like',"%".$cari."%")->paginate($batas);
        $jumlah_buku = $data_buku->count();
        $no = $batas *($data_buku->currentPage()-1);

        return view('buku.search', compact('data_buku','no','jumlah_buku','cari'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'judul' => 'required|string|max:20',
            'penulis' => 'required|string',
            'foto'=>'required|image|mimes:jpeg,jpg,png',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);
        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();
        $foto->move('images/', $namafile);

        $buku = new Buku;
        $buku->judul = $request->judul; 
        $buku->penulis = $request->penulis;
        $buku->foto = $namafile;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku')->with('pesan','Data Buku Berhasil di simpan');
    }

    public function destroy($id){

        $buku = Buku::find($id);

        $namafile = $buku->foto;
        File::delete('images/'.$namafile);

        $buku->delete();

        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);

        return view('buku.edit', compact('buku'));
    }

    public function update($id){
        $buku = Buku::find($id);
        $buku->judul = request('judul');
        $buku->penulis = request('penulis');
        $buku->harga = request('harga');
        $buku->tgl_terbit = request('tgl_terbit');
        if (request('foto')!= null){
            File::delete('images/'.$buku->foto);

            $foto = request('foto');
            $namafile = time().'.'.$foto->getClientOriginalExtension();
            $foto->move('images/', $namafile);
            $buku->foto = $namafile;
        }

        $buku->save();
        return redirect('/buku');
    }
    
    
}
