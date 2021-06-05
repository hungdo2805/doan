<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
            $user=Auth::user();
            if ($user->isadmin==0) {
               return $next($request);
            }
            else
                 // return redirect('dangnhap');
                echo "<script type='text/javascript'>
                alert('Bạn không có quyền truy cập !');
                window.location = '";
                    echo url('Home');
                echo"'
            </script>";
            
        }
        else
        {
            return redirect('dangnhap');
        }
       
    }
}
