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
				<form method="post" action="{{url('banner/inser')}}" >
					@csrf
					<div class="form-group" >
						<label>Name</label>
						<input type="text" name="name" placeholder="Enter your name" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>City</label>
						<input type="text" name="city" placeholder="Enter your name" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>Address</label>
						<input type="text" name="address" placeholder="Enter your name" class="form-control" style="border-radius: none;" >
					</div>
					<div class="form-group" >
						<label>College</label>
						<select class="form-control" name="college">
							<option>Select</option>
							<option value="ITM">ITM</option>
							<option value="RJIT" >RJIT</option>
							<option value="Amity" >Amity</option>
						</select>
						<!-- <input type="text" name="college" placeholder="Enter your name" class="form-control" style="border-radius: none;outline: none;border: none;" > -->
					</div>
					<div class="form-group" >
						<label>Gender</label><br>
						<input type="radio" name="gender" value="Male">Male<br>
						<input type="radio" name="gender" value="Female" >Female
					</div>
					<div class="form-group" >
						<label>Qulification</label><br>
						<input type="checkbox" name="qulification[]" value="12th">12th<br>
						<input type="checkbox" name="qulification[]" value="10th">10th
						<input type="checkbox" name="qulification[]" value="B.tech">B.tech
					</div>
					<div class="form-group" >
						<label>Phone</label>
						<input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control" style="border-radius: none;" >
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