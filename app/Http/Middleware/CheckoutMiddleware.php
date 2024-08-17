<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = Session::get('id_user');
        $checkout = DB::table('tbl_checkout')->where('id_user', $user_id)->exists();

        if (!$checkout) {
            return redirect('/Keranjang')->with('error', 'Belum ada data checkout. Silakan lakukan checkout terlebih dahulu.');
        }

        return $next($request);
    }
}
