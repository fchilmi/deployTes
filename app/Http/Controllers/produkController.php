<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\Gambar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

        // $produkTambahan = produk::inRandomOrder()->limit('3')->get();
        // dd($produkTambahan);
        $data = [
            'produks' => produk::whereNotNull('id')->latest()->paginate(6),
            // 'gambars' => Gambar::all()
        ];
        // dd($data);
        return view('user/dataProduk', $data);
    }

    public function edit(string $id)
    {
        $data = [
            'hasilProduk' => produk::find($id),
            'hasilGambar' => Gambar::where('idProduk', $id)->get(),
            'file'  => count(Gambar::where('idProduk', $id)->get())
        ];

        return view('/user/editProduk', $data);
    }

    public function addProduks(Request $request)
    {
        $produk = new produk();
        $fileNames = [];

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
        if ($request->file('produkImg')) {
            foreach ($request->file('produkImg') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $fileNames[] = $fileName;
            }
        }
        return redirect()->route('users')->with('success', 'Produk berhasil ditambahkan');
    }

    public function updateProduks(Request $request, string $id)
    {
        $produk = produk::find($id);
        $fileNames = [];

        $data = [
            'namaProduk' => $request->produkName,
            'slug' => Str::slug($request->produkName),
            'hargaProduk' => $request->produkPrice,
            'category_id' => $request->produkKategori,
            'deskripsiProduk' => $request->produkDeskripsi
        ];

        // if ($request->file('produkImg1') && $request->file('produkImg2') && $request->file('produkImg3')) {
        //     $request->file('produkImg1')->move(public_path('uploads'), $request->file('produkImg1')->getClientOriginalName());
        //     $request->file('produkImg2')->move(public_path('uploads'), $request->file('produkImg2')->getClientOriginalName());
        //     $request->file('produkImg3')->move(public_path('uploads'), $request->file('produkImg3')->getClientOriginalName());
        // }
        // foreach ($fileNames as $fileName) {
        //     $gambar = new Gambar();
        //     $gambar->idProduk = $id;
        //     $gambar->namaGambar = $fileName;
        //     $gambar->save();
        // }
        $produk->update($data);

        return redirect()->route('users')->with('success', 'Produk berhasil diupdate');
    }
    public function destroy($id)
    {
        $gambar = Gambar::all();
        $produk = produk::find($id);
        // if ($produk->namaGambar) {
        // }
        foreach ($gambar as $g) {
            if ($g->idProduk == $id) {
                $filePath = public_path('uploads') . '/' . $produk->namaGambar;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
                $g->delete();
            }
        }
        $produk->delete();
        return redirect()->route('users')->with('success', 'Produk berhasil dihapus');
    }
}
