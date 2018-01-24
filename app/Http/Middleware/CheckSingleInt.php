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
		$int=$request->num;	
		$passed=false;
		if($int>0)
			$passed=true;
		if(!$passed)
			return redirect('error');
		
		return $next($request);
		
    }
}
