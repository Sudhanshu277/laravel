<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">FORM</h1>
	<form method="post" action="{{url('image/insert')}}" enctype="multipart/form-data" >
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" required="required" placeholder="ENTER NAME" class="form-control" >
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file"  name="image" required="required"  class="form-control" >
		</div>
		
		<input type="submit" name="submit" value="submit" class="btn btn-info">
	</form>

</body>
</html>