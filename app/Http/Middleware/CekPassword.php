<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekPassword
{
    // Ini seperti SATPAM: cek dulu sebelum tamu boleh masuk ke Controller.
    public function handle(Request $request, Closure $next)
    {
        if ($request->query('kunci') !== 'secret') {
            return response('Maaf, Anda tidak punya akses! Kunci salah.');
        }

        return $next($request);
    }
}