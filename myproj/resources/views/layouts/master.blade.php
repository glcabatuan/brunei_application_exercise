<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
		<script type='text/javascript'>
			$(document).ready(function(){
				$("input#ctrl1").click(function(event){
					var number= $("input#numQ1").val();					
					$.get("/Prob1/"+number,
						function(data){							
							$("p#out1").html(data);
						}
					)
				});
				
				$("input#ctrl2").click(function(event){
					var number = $("input#numQ2").val();	
					$.get("/Prob2/"+number,
						function(data){							
							$("p#out2").html(data);
						}
					)
				});
				
				$("input#ctrl3").click(function(event){
					var word= $("input#wordQ3").val();	
					$.get("/Prob3/"+word,
						function(data){							
							$("p#out3").html(data);
						}
					)
				});
				
				$("input#ctrl4").click(function(event){
					var row= $("input#rowQ4").val();
					var col= $("input#colQ4").val();
					$.get("/Prob4/"+row+"/"+col,
						function(data){							
							$("p#out4").html(data);
						}
					)
				});
				
				$("input#ctrl5").click(function(event){
					var dividend= $("input#dividend").val();
					var divisor= $("input#divisor").val();
					$.get("/Prob5/"+dividend+"/"+divisor,
						function(data){							
							$("p#out5").html(data);
						}
					)
				});
			});
		</script>
    </head>
    <body>
        @section('sidebar')
            My Answers in the problems
        @show
		<ol>
			<li>
				<div class="problems">
				   <div class="question"> @yield('ques1')</div>
				   <div class="io"> @yield('io1')</div>
				   <div class="control"> @yield('ctrl1')</div>
				   <div class="output"> @yield('out1')</div>
				</div>
			</li>
			<li>
				<div class="problems">
				   <div class="question"> @yield('ques2')</div>
				   <div class="io"> @yield('io2')</div>
				   <div class="control"> @yield('ctrl2')</div>
				   <div class="output"> @yield('out2')</div>
				</div>
			</li>
			
			<li>
				<div class="problems">
				   <div class="question"> @yield('ques3')</div>
				   <div class="io"> @yield('io3')</div>
				   <div class="control"> @yield('ctrl3')</div>
				   <div class="output"> @yield('out3')</div>
				</div>
			</li>
			
			<li>
				<div class="problems">
				   <div class="question"> @yield('ques4')</div>
				   <div class="io"> @yield('io4')</div>
				   <div class="control"> @yield('ctrl4')</div>
				   <div class="output"> @yield('out4')</div>
				</div>
			</li>
			
			<li>
				<div class="problems">
				   <div class="question"> @yield('ques5')</div>
				   <div class="io"> @yield('io5')</div>
				   <div class="control"> @yield('ctrl5')</div>
				   <div class="output"> @yield('out5')</div>
				</div>
			</li>
		</ol>
    </body>
</html>
