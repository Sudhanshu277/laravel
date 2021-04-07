<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-bordered"  >
		<tr>
			<td>Name</td>
			<td>City</td>
			<td>Address</td>
			<td>Collage</td>
			<td>Gender</td>
			<td>Qulification</td>
			<td>Phone Number</td>
		</tr>
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->city}}</td>
			<td>{{$data->address}}</td>
			<td>{{$data->college}}</td>
			<td>{{$data->gender}}</td>
			<td>{{$data->qulification}}</td>
			<td>{{$data->phone_number}}</td>
		</tr>
	</table>

</body>
</html>