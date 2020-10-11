<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
	<link rel="stylesheet" href="style.css">

    <script src="script.js"></script>
	<title>Login Panel</title>
</head>

<body>
	
	<!-- PAGE HEADER -->
	<header id="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 m-auto text-center">
					<h1>GYM Registration Panel</h1>
				</div>
			</div>
		</div>
	</header>
     <?php
          require_once "fun.php";
     ?>
		<div class="container">
			<form action=""  name="f1" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
			
								
				<h4><p style="text-align:center; background-color: #cc6e00; padding: 10px; color: #ffffff; margin: auto 0px; border-radius: 0.25rem;">General Details</p></h4>

				<div class="form-group">
					<label for="inputFirstName">First Name: </label>
					<input type="text" id="inputFirstName"  placeholder="First Name" name="firstName" class="form-control" required="required">	
				</div>
				
				<div class="form-group">
					<label for="inputLastUnit">Last Name: </label>
					<input type="text" id="inputLastUnit" placeholder="Last Name" name="lastName" class="form-control" required="required">
				</div>
				
				<div class="form-group">
					<label for="inputMobNo">Mobile Number: </label>
					<input type="tel" id="inputMobNo" pattern="(6|7|8|9)\d{9}"  name="phoneNumber" placeholder="Eg. 90090090000" class="form-control" required="required">
				</div>
				
				<div class="form-group">
					<label for="inputAge">Age: </label>
					<input type="number" id="inputAge" min="16" max="50" placeholder="Age" name="age" class="form-control" required="required">
				</div>
				
				<div class="form-group">
					<label for="inputGender">Gender: </label>
					<select class="form-control" id="inputGender" name="sex">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>

				<hr style="margin: 30px auto;">

				<h4><p style="text-align:center; background-color: #1a7e00; padding: 10px; color: #ffffff; margin: auto 0px; border-radius: 0.25rem;">Address Details</p></h4>

				<div class="form-group">
					<label for="inputAddress">Address: </label>
					<input type="text" id="inputAddress" placeholder="Example: House No., Locality"  name="address" class="form-control" required="required">
				</div>

				<div class="form-group">
					<label for="inputCity">City: </label>
					<input type="text" id="inputCity" placeholder="City" name="city" class="form-control" required="required">
				</div>

				<div class="form-group">
					<label for="inputState">State: </label>
					<input type="text" id="inputState" placeholder="State" name="state" class="form-control" required="required">
				</div>

				<div class="form-group">
					<label for="inputPinCode">Pin Code: </label>
					<input type="text" id="inputPinCode" placeholder="Pin Code" name="pinCode" class="form-control" required="required">
				</div>
				
				<hr style="margin: 30px auto;">

				<h4><p style="text-align:center; background-color: #005a86; padding: 10px; color: #ffffff; margin: auto 0px; border-radius: 0.25rem;">Health Details</p></h4>
                             
                                    
				<div class="form-group">
					<label for="inputHeight">Height: </label>
					<input type="number" id="inputHeight" min="1" max="250" placeholder="Height in cm only" name="height" class="form-control" required="required">
				</div>

				<div class="form-group">
					<label for="inputWeight">Weight: </label>
                                        <input type="number" id="inputWeight" min="1" max="150" placeholder="Weight in kg only" name="weight" class="form-control" required="required" onBlur="calculateBmi()">
				</div>
                               
				<div class="form-group">
					<label for="inputBMI">BMI: </label>
					<input type="number" id="inputBMI" min="1" max="50" placeholder="BMI" name="bmi" class="form-control" value="" required="required">
				</div>
				
				<hr style="margin: 30px auto;">

				<div class="form-group">
					    <label for="uploadPhoto">Upload Photo:</label>
				        <input type="file" name="file"  class="btn btn-style btn-block">
						<button type="submit" name="upload" class="btn">UPLOAD</button>
					
				</div>

				<br>
				
				<div class="row">
					<div class="col text-center">
				        <input type="submit" name="submit" value="Register" class="btn btn-style btn-block">
					</div>
				</div>

				


					
			</form>
			
			<br>
			
		</div>
		
	</div>

	


	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>


	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>