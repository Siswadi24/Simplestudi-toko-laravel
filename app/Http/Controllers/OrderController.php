<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function Order(Request $request)
    {
        DB::table('tbl_keranjang')->insert([
            'id_user' => Session::get('id_user'),
            'id_barang' => $request->id_barang,
            'jumlah' => $request->jumlah_barang
        ]);

        return redirect()->back();
    }

    public function Keranjang()
    {
        $dataKeranjang = DB::table('keranjang')->get();
        return view('keranjang', ['dataKeranjang' => $dataKeranjang]);
    }
}
