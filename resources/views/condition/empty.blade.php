<h1>
	{{$a}}
</h1>

@isset($a)

   @empty($a)
     value is empty
   @endempty
    {{$a}}
   @endisset