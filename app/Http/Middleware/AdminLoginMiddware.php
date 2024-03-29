<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddware
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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->quyen == 1) {
                return $next($request);
            }else{
                return redirect('admin/dangnhap')->with('loi','Tài khoản không phải là quản trị viên');
            }
        }else{
            return redirect('admin/dangnhap');
        }

    }
}
