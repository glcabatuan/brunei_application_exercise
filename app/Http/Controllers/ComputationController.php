<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputationController extends Controller
{
	public function _construct(){
		$this->middleware('int');
	}
    public function Prob1(Request $request){	
	
		$values=str_split($request->num);
		$sum=0;
		foreach($values as $v){
			$sum += (int)$v;
		}
		echo $sum;		
	}
	
	public function Prob2(Request $request){
		$num=$request->num;
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
	}
	
	public function Prob3(Request $request){	
		
		$chars=str_split($request->word);		
		$duplicates = array_unique( array_diff_assoc( $chars, array_unique( $chars ) ));
		$uniques = array_diff($chars,$duplicates);		
		$uniques =array_values($uniques);
		if(isset($uniques[0]))
			echo $uniques[0];
		else
			echo "All have duplicates"; 
	}
	
	
	public function Prob4(Request $request){
		$row = $request->int1;
		$col = $request->int2;
		for($r=1;$r<=$row;$r++){
			for($c=1;$c<=$col;$c++){
				$prod=$r*$c;
				echo $prod.' &nbsp';
			}
			echo '<br/>';
		}
	}
	
	public function Prob5(Request $request){
		$int1=$request->int1;
		$int2=$request->int2;
		$value = $int1/$int2;
		$intVal=intval($value);
		$prod = $int2*$intVal;
		$mod = $int1-$prod;
		echo $mod;
	}
}
