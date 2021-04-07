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
				<form method="post" action="{{url('test/insert')}}" >
					@csrf
					<div class="form-group" >
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter your name" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>College</label>
						<input type="text" name="college" placeholder="Enter your college" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>Branch</label>
						<input type="text" name="branch" placeholder="Enter your branch" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>salary</label>
						
						<input type="text" name="salary" placeholder="Enter your salary" class="form-control" style="border-radius: none;outline: none;border: none;" >
					</div>
					<div class="form-group" >
						<label>Subject</label><br>
						<input type="text" name="subject"  class="form-control">
					</div>
					<div class="form-group" >
						<label>Address</label><br>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-group" >
						<label>Phone</label>
						<input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter your phone number" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>Gender</label>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female" >Female
					</div>

					<input type="submit" name="Submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
			<div class="col-md-3" ></div>
		</div>
	</div>
</section>>
</body>
</html>