<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index()
    {
        $dataBarang = Barang::all();
        return view('utama', ['dataBarangs' => $dataBarang]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|max:2048',
        ]);

        $file = $request->file('file');
        $nama_file = time().'_'.$file->getClientOriginalName();
        $tjuan_upload = 'data_file';
        if ($file->move($tjuan_upload, $nama_file)) {
            $data = Barang::create([
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'gambar_produk' => $nama_file
            ]);

            $res['message'] = "success";
            $res['data'] = $data;
            return response($res);
        }
    }
}
