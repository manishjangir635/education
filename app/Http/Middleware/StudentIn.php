<?php

namespace App\Http\Middleware;

use Closure;
Use Auth;
Use Redirect;

class StudentIn 
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
       
        if(!empty(Auth::user()) && (Auth::user()->user_role_id  ==3)){
			return Redirect::to('my-learning');
        }
        return $next($request);
    }
}
