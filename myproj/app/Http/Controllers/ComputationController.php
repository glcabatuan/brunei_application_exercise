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
