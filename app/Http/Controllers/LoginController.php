<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function Register(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->nama_user,
            'email' => $request->email_user,
            'password' => $request->password_user
        ]);

        return redirect('/login');
    }

    public function Login(Request $request)
    {
        $user = DB::table('users')->where('email', $request->login_email)->first();

        if ($user->password == $request->login_password) {
            Session::put('id_user', $user->id);
            echo "Login Berhasil dengan session id: " . $request->session()->get('id_user');
            return redirect('/');
        }else {
            return redirect('/login')->with('error', 'Login Gagal, silahkan cek kembali password atau email anda');
        
            // echo "Login Gagal";
            // return redirect('/login');
        }
    }

    public function Logout()
    {
        Session::flush();
        return redirect('/');
    }
}
