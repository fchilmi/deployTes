<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Gambar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class produkController extends Controller
{
    public function dataProduk(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();
            return datatables()->of($users)->make(true);
        }

        return view('user/dataProduk', compact('request'));
    }

    public function index()
    {
        $data['produks'] = produk::all();
        return view('user/dataProduk', $data);
    }

    public function addProduks(Request $request)
    {
        $produk = new produk();
        $fileNames = [];

        if ($request->file('produkImg')) {
            foreach ($request->file('produkImg') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $fileNames[] = $fileName;
            }
        }
        $data = [
            'namaProduk' => $request->produkName,
            'slug' => Str::slug($request->produkName),
            'hargaProduk' => $request->produkPrice,
            'category_id' => $request->produkKategori,
            'deskripsiProduk' => $request->produkDeskripsi,
            'namaGambar' => $request->file('produkImg')[0]->getClientOriginalName()
        ];
        produk::create($data);
        $produkId = $produk->latest()->first()->id;

        // dd($data, $fileNames, $produkId);
        foreach ($fileNames as $fileName) {
            $gambar = new Gambar();
            $gambar->idProduk = $produkId;
            $gambar->namaGambar = $fileName;
            $gambar->save();
        }
        // dd("yes");
        return redirect()->route('users')->with('success', 'Produk berhasil ditambahkan');
    }
}
