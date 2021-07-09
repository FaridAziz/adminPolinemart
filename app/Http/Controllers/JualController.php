<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class JualController extends Controller
{
    public function index()
    {
        $request = Http::get('http://localhost/polinemart/api/RestJual');
        $jual = json_decode($request->body(), true);
        return view('Jual', ['jual' => $jual]);
    }

    public function tambah()
    {
        return view('tambahJual');
    }

    public function simpan(Request $request)
    {
        $client = Http::post('http://localhost/polinemart/api/RestJual', 
        [
            'nama_brg' => $request->nama_brg,
            'keterangan' => $request->keterangan,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);

        if ($client->successful()) {
            return redirect('/jual');
        } else {
            return redirect('/jual');
        }
    }

    public function delete($id_brg)
    {
        $client = Http::asForm()->delete('http://localhost/polinemart/api/RestJual', [
            'id_brg' => $id_brg
        ]);

        if ($client['status'] == 'success') {
            return redirect('/jual');
        } else {
            return redirect('/jual');
        }
    }

    public function edit($id_brg)
    {
        $jual = DB::table('tb_jual')->where('id_brg',$id_brg)->get();

        return view('editJual', ['jual' => $jual]);
    }

    public function update($id_brg,Request $request){
        $client = Http::asForm()->put('http://localhost/polinemart/api/RestJual', 
        [
            'id_brg' => $request->id_brg,
            'nama_brg' => $request->nama_brg,
            'keterangan' => $request->keterangan,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
           
        ]);

        if ($client->successful()) {
            return redirect('/jual');
        } else {
            return redirect('/jual/edit/{id_brg}');
        }
    }

}
