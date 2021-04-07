<h1>
	{{$name}}


@foreach($names as $s)

{{$loop->index}} . {{$s}} <br/>
@endforeach
</h1>