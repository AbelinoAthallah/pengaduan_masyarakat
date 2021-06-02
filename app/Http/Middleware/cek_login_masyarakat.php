<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class cek_login_masyarakat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::get('login_status_masyarakat')!=true){
            return redirect('login_masyarakat');
        }
        return $next($request);
    }
}
