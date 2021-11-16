<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AdminSigned {

    public function handle($request, Closure $next) {
        if (!Session::has('is_admin')) {
            Session::flash('adminMust', 'הגישה לדף זה מותרת למנהל מערכת בלבד');
            if (Session::has('user_id')) {
                return redirect('');
            } else {
                return redirect('user/login');
            }
        } else {
            return $next($request);
        }
    }

}
