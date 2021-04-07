<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<section>
	<div class="container" >
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 card shadow " style="margin-top: 40px;"  >
				<h4 class="text-center" >Form</h4><hr>
				<form method="post" action="{{url('test/update')}}" >
					@csrfs
					<input type="hidden" name="id" value="{{$data->id}}"  >
					<div class="form-group" >
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter your name" class="form-control" style="border-radius: none;" value="{{$data->name}}" >
					</div>
					<div class="form-group" >
						<label>College</label>
						<input type="text" name="college" placeholder="Enter your college" class="form-control" style="border-radius: none;" value="{{$data->college}}" >
					</div>
					<div class="form-group" >
						<label>Branch</label>
						<input type="text" name="branch" placeholder="Enter your branch" class="form-control" style="border-radius: none;" value="{{$data->branch}}" >
					</div>
					<div class="form-group" >
						<label>salary</label>
						
						<input type="text" name="salary" placeholder="Enter your salary" value="{{$data->salary}}" class="form-control" style="border-radius: none;outline: none;border: none;" >
					</div>
					<div class="form-group" >
						<label>Subject</label><br>
						<input type="text" value="{{$data->subject}}" name="subject"  class="form-control">
					</div>
					<div class="form-group" >
						<label>Address</label><br>
						<input type="text" name="address" value="{{$data->address}}" class="form-control">
					</div>
					<div class="form-group" >
						<label>Phone</label>
						<input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control" style="border-radius: none;" value="{{$data->phone_number}}" >
					</div>
					<div class="form-group" >
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter your phone number" class="form-control" style="border-radius: none;" value="{{$data->email}}"  >
					</div>
					<div class="form-group" >
						<label>Gender</label>
						<input type="radio" name="gender" value="{{$data->gender}}" >Male
						<input type="radio" name="gender" value="{{$data->gender}}" >Female
					</div>

					<input type="submit" name="update" class="btn btn-primary" value="update">
				</form>
			</div>
			<div class="col-md-3" ></div>
		</div>
	</div>
</section>>
</body>
</html>