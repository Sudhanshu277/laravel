<h1>
	{{$c}}
</h1>
{{strlen($c)}}
<br / >

@if(strlen($c)>5) 
   string has lenght >0
@elseif(strlen($c)>5 && strlen($c)<10)
      
      strlen lenght with in 5 to 10 
@elseif(strlen($c)>10)
       string has lenght >10
@else
string has lenght

@endif