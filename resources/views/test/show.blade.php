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
			<td>Colege</td>
			<td>Branch</td>
			<td>salary</td>
			<td>Subject</td>
			<td>Address</td>
			<td>Phone Number</td>
			<td>Email</td>
			<th>Gender</th>
		</tr>
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->college}}</td>
			<td>{{$data->branch}}</td>
			<td>{{$data->salary}}</td>
			<td>{{$data->subject}}</td>
			<td>{{$data->address}}</td>
			<td>{{$data->phone_number}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->gender}}</td>
		</tr>
	</table>

</body>
</html>