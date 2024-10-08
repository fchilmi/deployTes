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
        ];
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
            'namaGambar' => Str::random(10) . $request->file('produkImg')[0]->getClientOriginalName()
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
                $fileName = Str::random(10) . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $fileNames[] = $fileName;
            }
        }
        return redirect()->route('users')->with('success', 'Produk berhasil ditambahkan');
    }

    public function updateProduk(Request $request, string $id)
    {
        $produk = produk::find($id);
        // $gambar = Gambar::select('namaGambar')->where('idProduk', $id)->get();
        // $fileNames = [];
        // $coba = $request->coba;

        $data = [
            'namaProduk' => $request->produkName,
            'slug' => Str::slug($request->produkName),
            'hargaProduk' => $request->produkPrice,
            'category_id' => $request->produkKategori,
            'deskripsiProduk' => $request->produkDeskripsi
        ];

        $produk->update($data);
        return redirect()->route('users')->with('success', 'Produk berhasil diupdate');
    }
    public function updateProdukGambar(Request $request, string $id)
    {
        $produk = produk::find($id);
        $gambarLama = Gambar::where('idProduk', $id)->get();
        // dd($gambarLama[0]);
        // Validasi input gambar jika ada
        $request->validate([
            'produkImg1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'produkImg2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'produkImg3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses update gambar
        if ($request->hasFile('produkImg1')) {
            // Hapus gambar lama jika ada
            if (isset($gambarLama[0])) {
                File::delete('uploads/' . $gambarLama[0]->namaGambar);
            }
            // Upload gambar baru
            $file1 = $request->file('produkImg1');
            $namaGambar1 = Str::random(10) . $file1->getClientOriginalName();
            $file1->move(public_path('uploads'), $namaGambar1);

            // Update database
            if (isset($gambarLama[0])) {
                $gambarLama[0]->namaGambar = $namaGambar1;
                $gambarLama[0]->save();
            } else {
                Gambar::create(['idProduk' => $id, 'namaGambar' => $namaGambar1]);
            }
        }

        if ($request->hasFile('produkImg2')) {
            // Hapus gambar lama jika ada
            if (isset($gambarLama[1])) {
                File::delete('uploads/' . $gambarLama[1]->namaGambar);
            }
            // Upload gambar baru
            $file2 = $request->file('produkImg2');
            $namaGambar2 = Str::random(10) . $file2->getClientOriginalName();
            $file2->move(public_path('uploads'), $namaGambar2);

            // Update database
            if (isset($gambarLama[1])) {
                $gambarLama[1]->namaGambar = $namaGambar2;
                $gambarLama[1]->save();
            } else {
                Gambar::create(['idProduk' => $id, 'namaGambar' => $namaGambar2]);
            }
        }

        if ($request->hasFile('produkImg3')) {
            // Hapus gambar lama jika ada
            if (isset($gambarLama[2])) {
                File::delete('uploads/' . $gambarLama[2]->namaGambar);
            }
            // Upload gambar baru
            $file3 = $request->file('produkImg3');
            $namaGambar3 = Str::random(10) . $file3->getClientOriginalName();
            $file3->move(public_path('uploads'), $namaGambar3);

            // Update database
            if (isset($gambarLama[2])) {
                $gambarLama[2]->namaGambar = $namaGambar3;
                $gambarLama[2]->save();
            } else {
                Gambar::create(['idProduk' => $id, 'namaGambar' => $namaGambar3]);
            }
        }

        // Update informasi produk lainnya
        if ($request->hasFile('produkImg1')) {
            $produk->update([
                'namaGambar' => Str::random(10) . $request->file('produkImg1')->getClientOriginalName(),
                'updated_at' => now(),
            ]);
        }

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
