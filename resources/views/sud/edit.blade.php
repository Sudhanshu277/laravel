<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<section>
	<div class="container" >
		<form class="form-group" method="post" action="{{url('sud/update')}}" >
			@csrf
			<input type="hidden" name="id" value="{{$data->id}}" >
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$data->name}}" >
			<label>Address</label>
			<input type="text" name="address" class="form-control" value="{{$data->address}}" >
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="{{$data->email}}" >
			<input type="submit" name="update" value="update" class="btn btn-info" > 
		</form>
	</div>
</section>
</body>
</html>