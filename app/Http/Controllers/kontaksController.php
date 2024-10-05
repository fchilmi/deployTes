<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use App\Models\profil;
use Illuminate\Http\Request;

class kontaksController extends Controller
{
    public function updateProfil(Request $request, string $id)
    {
        $cari = profil::find($id);
        $cari->update([
            'namaPerusahaan' => $request->nama_perusahaan,
            'alamatToko' => $request->alamatToko,
            'alamatGudang' => $request->alamatGudang,
            'deskripsiPerusahaan' => $request->deskripsi,
        ]);

        return redirect()->route('user/kontak');
    }
    public function updateGambar(Request $request, string $id)
    {
        $gambar = profil::find($id);
        if ($request->files1 && $request->files2 && $request->files3 != null) {
            $gambar->update([
                'GambarPerusahaan1' => $request->files1->getClientOriginalName(),
                'GambarPerusahaan2' => $request->files2->getClientOriginalName(),
                'GambarPerusahaan3' => $request->files3->getClientOriginalName()
            ]);
            $request->file('files1')->move(public_path('uploads'), $request->files1->getClientOriginalName());
            $request->file('files2')->move(public_path('uploads'), $request->files2->getClientOriginalName());
            $request->file('files3')->move(public_path('uploads'), $request->files3->getClientOriginalName());
        }
        dd('BISA');

        return redirect()->route('user/kontak');
    }
    public function addKontak(Request $request)
    {
        kontak::create([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'email' => $request->email,
        ]);
        return redirect()->route('user/kontak');
    }
    public function updateKontak(Request $request, string $id)
    {
        $data = kontak::find($id);
        $data->update([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'email' => $request->email,
        ]);
        return redirect()->route('user/kontak');
    }
}
