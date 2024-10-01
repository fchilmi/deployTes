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
    public function updateKontak(Request $request, string $id)
    {
        // $coba = [
        //     'nama' => $request->nama,
        //     'nomor' => $request->nomor,
        //     'email' => $request->email,
        // ];
        // dd($coba);


        $data = kontak::find($id);
        $data->update([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'email' => $request->email,
        ]);

        return redirect()->route('user/kontak');
    }
}
