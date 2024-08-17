<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class UtamaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search_produk;
        
        if (strlen($search)) {
            $dataBarang = Barang::where('nama_produk', 'like', '%' . $search . '%')->get();
        }else {
            $dataBarang = Barang::all();    
        }
        

        // ddd($dataBarangSearch);

        return view('utama')->with('dataBarang', $dataBarang);
    }

    // public function searchProduk(Request $request)
    // {
    //     // $search = $request->input('search_produk');
    //     // $dataBarang = Barang::where('nama_produk', 'like', '%' . $search . '%')->get();

    //     // $data = [
    //     //     'data_produk' => $dataBarang,
    //     //     'search' => $search,
    //     //     'hasResults' => $dataBarang->isNotEmpty()
    //     // ];

    //     return view('utama', compact('dataBarang'));
    // }

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
