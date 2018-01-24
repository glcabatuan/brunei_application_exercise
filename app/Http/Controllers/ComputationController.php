<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputationController extends Controller
{
	public function _construct(){
		$this->middleware('int');
	}
	
	//method for Problem 1
    public function Prob1(Request $request){	
	
		$values=str_split($request->num);  //explode string to characters
		$sum=0;
		
		/* get and convert each character to int and add to the current summation */
		foreach($values as $v)
			$sum += (int)$v;
		
		echo $sum;		 //print sum
	}
	
	//method for Problem 2
	public function Prob2(Request $request){
		$num=$request->num;    // get the integer from the request
		$values=array(0,1,2,3,4,5,6);  // set the given array
		
		echo "Given Array: ". implode($values,',')."<br/><br/>";  // display the given array
		
		$pairs=array();  // create a repository for the addend pairs
		
		/*
			push the difference into the repository of each value of the given array and the integer entered
			if the difference is within the bounds or not greater than or equal to one of the elements of the given array
		*/
		foreach($values as $val){
			
			$diff=$num-$val;
			if($val>=$diff)
				break;
			else{
				if(in_array($diff,$values))
					array_push($pairs,$val .','.$diff);
			}
				
		}
		$ans= implode(' ; ',$pairs);  //implode array elements to one string
		echo $ans;
	}
	
	public function Prob3(Request $request){	
		
		$chars=str_split($request->word);		 // explode the word to character array
		$duplicates = array_unique( array_diff_assoc( $chars, array_unique( $chars ) )); // get all the duplicated elements
		$uniques = array_diff($chars,$duplicates);		// pull out all unique characters from $chars array
		$uniques =array_values($uniques);  // re evaluate all the keys starting at 0
		
		/*
		display the first unique element if the first element 
		is set or not null else all letters have duplications
		*/
		if(isset($uniques[0]))
			echo $uniques[0];
		else
			echo "All have duplicates"; 
	}
	
	
	public function Prob4(Request $request){
		
		/*
		get row and column counts from the HTTP request
		*/
		$row = $request->int1; 
		$col = $request->int2;
		
		/*
		Display the products of incrementing rows and columns using nested loops
		*/
		for($r=1;$r<=$row;$r++){
			for($c=1;$c<=$col;$c++){
				$prod=$r*$c;
				echo $prod.' &nbsp';
			}
			echo '<br/>';
		}
	}
	
	public function Prob5(Request $request){
		/*
		get row and column counts from the HTTP request
		*/
		$int1=$request->int1;
		$int2=$request->int2;
		
		
		$value = $int1/$int2;  //divide the dividend by the divisor
		$intVal=intval($value); //get the integer value of the quotient
		$prod = $int2*$intVal; // multiply the quotient by the divisor
		$mod = $int1-$prod; //subtract the dividend by the product incurred
		echo $mod; // display the modulus result
		
		/*
		One liner syntax for the operation could be:
			echo $int1-($int2*intVal($int/$int2));
		*/
	}
}
