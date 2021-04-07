<h1>
	{{$name}}
<?php $i=0 ?>
@while($i<=6)
{{$i++}}
@endwhile

@foreach($names as $e)
{{$e}}
@endforeach
</h1>