<?php

namespace App\Http\Middleware;

use Closure;

class CheckSingleInt
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
		$int=intval($request->num);	 // get number from request		
		
		/* 
		proceed to request processing if it is a positive integer. 
		If not, return error message
		*/
		if($int>0)
			return $next($request);
		if(!$passed)
			return redirect('error');		
		
		
    }
}
