<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiketController extends Controller
{
    public function index()
    {
        $tiket = DB::table('tikets')->get();
        return view('tiket', compact('tiket'));
    }

    public function cek(Request $request)
    {
        $kodetiket = $request->kode;
        $data = DB::table('tikets')->select('kode','nim','nama','hari','sesi')->where('kode', '=', $kodetiket)->get();
        return view('cektiket')->with('data', $data);
    }

    public function reserve(Request $request)
    {
        $timenow = date('dmyhis');
        $data = [
            'kode' => $timenow,
            'nim' => $request->nim,
            'nama' => $request->name,
            'hari' => $request->hari,
            'sesi' => $request->sesi,
        ];
        $tiket = Tiket::create($data);
        return view('tiket')->with('data', $data);
    }
}
