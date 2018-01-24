<?php

namespace App\Http\Middleware;

use Closure;

class CheckDoubletInt
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
		$int1=$request->int1;
		$int2=$request->int2;		
		$passed=false;
		if($int1>0 && $int2>0)
			$passed=true;
		if(!$passed)
			return redirect('error');
		
        return $next($request);
    }
}
