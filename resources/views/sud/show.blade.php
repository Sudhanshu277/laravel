<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered table-striped table-dark table-hover" >
	@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
@foreach($data as $a)
    <tr>
    	<td>{{$a->name}}</td>
    	<td>{{$a->address}}</td>
    	<td>{{$a->email}}</td>
    	<td>
    		<a href="{{url('sud/detail/'.$a->id)}}" class="btn btn-info" >Detail</a>
    		<a href="{{url('sud/edit/'.$a->id)}}" class="btn btn-warning" >Edit</a>
    		<a href="{{url('sud/delete/'.$a->id)}}" class="btn btn-danger" >Delete</a>
    	</td>
    </tr>
@endforeach
</table>
</body>
</html>