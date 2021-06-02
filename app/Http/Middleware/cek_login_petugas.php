<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cek_login_petugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::get('login_status_petugas')!=true){
            return redirect('login_petugas');
        }
        return $next($request);
    }
}
