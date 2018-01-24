<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', 'My Answers')

@section('sidebar')
    @parent

    <p>Instructions</p>
@endsection


@section('ques1')
    <p>Write a PHP program to compute the sum of the digits of a number.</p>
@endsection
@section('io1')
    <p> Example input: 2315</p>
	<p>answer:   11</p>
@endsection
@section('ctrl1')
    <p>Input Number: <input type='text' id='numQ1'/> <input id='ctrl1' type='button' value='Show Answer'/></p>
@endsection
@section('out1')
    <p id='out1'> answer </p>
@endsection
		   


@section('ques2')
    <p>Write a PHP program to print out the sum of pairs of numbers of a given sorted array of positive integers which is equal to a given number.</p>
	<p>given sorted array = array(0,1,2,3,4,5,6);</p>
@endsection
@section('io2')
    <p> Example input: 7</p>
	<p>sample output: 1,6  ; 2,5 ; 3,4</p>
@endsection
@section('ctrl2')
    <p>Input Number: <input type='text' id='numQ2'/> <input id='ctrl2' type='button' value='Show Answer'/></p>
@endsection
@section('out2')
    <p id='out2'> answer </p>
@endsection


@section('ques3')
    <p>Write a PHP program to find the first non-repeated character in a given string. </p>
@endsection
@section('io3')
    <p>Input: Green</p>
	<p>Output: G</p>
	<p>Input: abcdea</p>
	<p>Output: b</p>
@endsection
@section('ctrl3')
    <p>Input Word: <input type='text' id='wordQ3'/> <input id='ctrl3' type='button' value='Show Answer'/></p>
@endsection
@section('out3')
    <p id='out3'> answer </p>
@endsection


@section('ques4')
    <p>Write a PHP program to print out the multiplication table upto 6*6. </p>
@endsection
@section('io4')
    <pre>
	Sample Output:	 

	 1   2   3   4   5   6                                      

	 2   4   6   8  10  12                                      

	 3   6   9  12  15  18                                      

	 4   8  12  16  20  24                                      

	 5  10  15  20  25  30                                      

	 6  12  18  24  30  36 
	</pre>
@endsection
@section('ctrl4') 
    <p>Input Row: <input type='text' id='rowQ4'/> Input Column: <input type='text' id='colQ4'/> <input id='ctrl4' type='button' value='Show Answer'/></p>
@endsection
@section('out4')
    <p id='out4'> answer </p>
@endsection



@section('ques5')
    <p>Write a PHP program to calculate the mod of two given integers without using any inbuilt modulus operator. </p>
@endsection
@section('ctrl5')
      <p>Input Dividend: <input type='text' id='dividend'/> Input Divisor: <input type='text' id='divisor'/> <input id='ctrl5' type='button' value='Show Answer'/></p>
@endsection
@section('out5')
    <p id='out5'> answer </p>
@endsection






