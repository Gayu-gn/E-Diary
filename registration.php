<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" >
	<style>
		body{
			background-color: #de9bd9;
		}
		.back{
			text-decoration: none;
            color: black;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body  shadow-lg"  style="background-color: #de9bd9;" >
                    <h3 class="card-title text-center">Registration</h3><br><br>
                    <form method="POST" class="form-signin">
                        <div class="form-label-group">
                        <div class="row">
                        	<div class="col">
                            	<label>Firstname<span style="color: #FF0000">*</span></label>
                            	<input type="text" name="firstname" class="form-control" placeholder="Firstname..." required>
                        	</div>
                        	<div class="col">
                            	<label>Lastname<span style="color: #FF0000">*</span></label>
                            	<input type="text" name="lastname" class="form-control" placeholder="Lastname..." required>
                        	</div>
                    	</div>
                        </div> <br/>
                        <div class="form-label-group">
                        <div class="row">
                        	<div class="col">
                        		<label>Gender<span style="color: #FF0000">*</span></label>
                            	<select class="form-select" name="gender">
									<option selected>Select Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="others">Others</option>				
								</select>
                        	</div>
                        	<div class="col">
                            	<label>Phone No.<span style="color: #FF0000">*</span></label>
                            	<input type="number" name="phoneno" class="form-control" placeholder="Phone number..." required>
                        	</div>
                    	</div>
                        </div> <br/>
                        <div class="form-label-group">
                        <div class="row">
                        	<div class="col">
                            	<label>Email Id<span style="color: #FF0000">*</span></label>
                            	<input type="email" name="email_id" class="form-control" placeholder="Email Id..." required>
                        	</div>
                        	<div class="col">
                            	<label>City<span style="color: #FF0000">*</span></label>
                            	<input type="text" name="city" class="form-control" placeholder="City..." required>
                        	</div>
                    	</div>
                        </div> <br/>
                        <div class="form-label-group">
                        <div class="row">
                        	<div class="col">
                            	<label>Password<span style="color: #FF0000">*</span></label>
                            	<input type="password" name="password" class="form-control" placeholder="Password..." required>
                        	</div>
                        	<div class="col">
                            	<label>Confirm Password<span style="color: #FF0000">*</span></label>
                            	<input type="text" name="cpassword" class="form-control" placeholder="Confirm Password..." required>
                        	</div>
                    	</div>
                        </div> <br/><br>
                        <center>
                        <button type="submit" style="color: white; background-color: #9d6aba; " name="submit" class="btn btn-lg btn-block text-uppercase" >Submit</button>
                    </form>
                    <br><br>
                    <a href="login.php" class="back">Click to Login</a>
                    <hr><hr>
                    <a href="index.html" class="back">Back to home page</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phoneno = $_POST['phoneno'];
	$email_id = $_POST['email_id'];
	$city = $_POST['city'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$conn = mysqli_connect("localhost","root","","ediary");

	if($password==$cpassword)
	{
		$q = "insert into registration values ('$firstname','$lastname','$gender','$phoneno','$email_id','$city','$password')";
		$r = mysqli_query($conn,$q);
		if($r)
		{
			echo "<script> alert('Registered Successfully!!'); </script>";
		}
		else
		{
			echo "<script> alert('failed to connect!!'); </script>";
		}
	}
	else
	{
		echo "<script> alert('Password not matched. TRY WITH SAME PASSWORD!!'); </script>";
	}

}

?>
