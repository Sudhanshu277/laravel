<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	@if(session('message'))

		     <p class ="alert alert-success">
		     	{{session('message')}}
		     </p>
		     	
		@endif
	<table class="table table-bordered">
		<tr>
			<th>Name</th>
			<th>City</th>
			<th>Collage</th>
			<th>Action</th>
		</tr>
@foreach($data as $a)		
         <tr>
         	<td>{{$a->name}}</td>
         	<td>{{$a->city}}</td>
         	<td>{{$a->college}}</td>
         	<td>
         		<a href="{{url('banner/show/'.$a->id)}}" class="btn btn-info" >Show</a>
         		<a href="{{url('banner/edit/'.$a->id)}}" class="btn btn-primary" >Edit</a>
         		<a href="{{url('banner/delete/'.$a->id)}}" class="btn btn-danger" >Delete</a>
         	</td>
         </tr>
@endforeach
	</table>

</body>
</html>