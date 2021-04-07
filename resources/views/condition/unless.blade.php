<h1>
	{{$name}}
@unless($names)
   array has no value
@endunless
	
@foreach($names as $z)
{{$z}}
@endforeach

</h1>