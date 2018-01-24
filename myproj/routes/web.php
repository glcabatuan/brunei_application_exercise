<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Problems Solutions */


/*Problem#1*/
Route::get('/Prob1/{num}', function ($num) {
	
	$values=str_split($num);
	$sum=0;
    foreach($values as $v){
		$sum += (int)$v;
	}
	echo $sum;
});


/*Problem#2*/
Route::get('/Prob2/{num}', function ($num) {
	$values[]=array();
	for($i=0;$i<(int)$num;$i++)
		$values[$i]=$i;
	
	echo "Given Array: ". implode($values,',')."<br/><br/>";
	
	$pairs=array();
	foreach($values as $val){
		
		$diff=$num-$val;
		if($val>0 && $val <$diff)
			array_push($pairs,$val .','.$diff);
		if($val>=$diff)
			break;
	}
	$ans= implode(' ; ',$pairs);
	echo $ans;
});


/*Problem#3*/
Route::get('/Prob3/{word}', function ($word) {
	
	$chars=str_split($word);
	$counts=array();

	for($index=0;$index<count($chars);$index++){
		$stop=false;
		$count=0;
		for($comp=$index+1;$comp<count($chars);$comp++){
			
			$count+=($chars[$index]==$chars[$comp]?1:0);			
		
		}
		$counts[$index]=($chars[$index]."-".$count);
		echo $counts[$index].'<br/>';			
	}
	$char='';
	
	for($index=0;$index<count($chars);$index++){
		$pairs=explode('-',$counts[$index]);
		if($pairs[1]==0){
			$char=$pairs[0];
			break;
		}
	}
	
	echo $char;
	
  
	
   

});




