<h1>
	{{$name}}
@forelse($names as $w)
{{$w}}<br/>
@empty
 no user found in list
@endforelse
@foreach($names as $v)
{{$v}}
@endforeach
</h1>