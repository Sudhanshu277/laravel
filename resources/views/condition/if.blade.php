<h1>
{{$a}}

</h1>
<h1>{{$a}}</h1>
@if($a=="if statement")
    {{$a}}
@endif

@if($a)
    {{$a}}
    <br />
@endif

<h1>if statement</h1>
{{$a}}

<?php $s=5; ?>
@if($s>=4)
{{$s}} . greter than 4 
@endif