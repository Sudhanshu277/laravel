<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-bordered table-striped table-dark table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>Password</th>
			
			<th>ACTION</th>
		</tr>
       
       	

      
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->username}}</td>
			<td>{{$data->password}}</td>
			
			
		</tr>
	
	</table>

</body>
</html>