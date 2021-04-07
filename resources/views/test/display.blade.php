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
	<table class="table table-bordered table-striped table-dark table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>College</th>
			<th>Branch</th>
			<th>ACTION</th>
		</tr>
       
 @foreach($data as $a)       	

      
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->name}}</td>
			<td>{{$a->college}}</td>
			<td>{{$a->branch}}</td>
			<td>
				<a href="{{url('test/show/'.$a->id)}}" class="btn btn-primary" >SHOW</a>
				<a href="{{url('test/edit/'.$a->id)}}" class="btn btn-info" >EDIT</a>
				<a href="{{url('test/delete/'.$a->id)}}" class="btn btn-danger" >DELETE</a>
			</td>	
		</tr>
@endforeach		
	</table>

</body>
</html>