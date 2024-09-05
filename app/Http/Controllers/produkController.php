<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $data['users'] = User::all();
        return view('user/dataProduk', $data);
    }
}
