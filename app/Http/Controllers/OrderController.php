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

    public function hapusKeranjang($id_keranjang)
    {
        // $user_id = Session::get('id_user');

        // DB::table('tbl_keranjang')
        // ->where('id_user', $user_id)
        // ->where('id_barang', $id_barang)
        // ->delete();
        DB::table('tbl_keranjang')->where('id', $id_keranjang)->delete();

        return redirect('/Keranjang');
    }

    public function Checkout()
    {
        $id_checkout = rand().rand().rand();
        $total = 0;
        $dataKeranjang = DB::table('tbl_keranjang')->where('id_user', Session::get('id_user'))->get();
        foreach ($dataKeranjang as $dataKrj) {
            $dataBarang = DB::table('tbl_barang')->where('id', $dataKrj->id_barang)->get();
            foreach ($dataBarang as $dtBrng) {
                $total += ($dtBrng->harga_produk * $dataKrj->jumlah);
                DB::table('tbl_detailCheckout')->insert([
                    'id_checkout' => $id_checkout,
                    'id_barang' => $dataKrj->id_barang,
                    'jumlah' => $dataKrj->jumlah
                ]);
            }
        }

        DB::table('tbl_checkout')->insert([
            'id_checkout' => $id_checkout,
            'id_user' => Session::get('id_user'),
            'total' => $total
        ]);

        return redirect('/checkout-List');
    }

    public function checkoutList()
    {
        $checkout = DB::table('checkout')->get();
        return view('checkout', ['checkout' => $checkout]);
    }

    public function confirm()
    {
        return view('confirm');
    }

    public function konfirmasiSimpan(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $tujuan_upload = 'bukti_bayar';
        if ($file->move($tujuan_upload, $nama_file)) {
            DB::table('tbl_konfirmasi')->insert([
                'id_user' => Session::get('id_user'),
                'id_checkout' => $request->id_token,
                'bukti' => $nama_file
            ]);

            return redirect('/confirm');
        }
    }
}
