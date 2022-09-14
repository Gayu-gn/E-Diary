<?php
session_start();
?>
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
        h3{
            font-size: 40px;
            font-weight: bold;
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
                    <h3 class="card-title text-center">Login</h3><br><br>
                    <form method="POST" class="form-signin">
                        <div class="form-label-group">
                            	<label>Email ID<span style="color: #FF0000">*</span></label><br>
                            	<input type="email_id" name="email_id1" class="form-control" placeholder="Email ID..." required>
                        	</div><br><br>
                        <div class="form-label-group">	
                            	<label>Password<span style="color: #FF0000">*</span></label><br>
                            	<input type="password" name="password1" class="form-control" placeholder="Password..." required>
                        </div><br><br>
                        <center>
                        <button type="submit" style="color: white; background-color: #9d6aba; " name="submit" class="btn btn-lg btn-block text-uppercase" >Login</button>
                    </form>
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
	
	$email_id1 = $_POST['email_id1'];
	$password1 = $_POST['password1'];
	$conn = mysqli_connect("localhost","root","","ediary");
    $q="select * from registration where email_id='$email_id1' and password='$password1' ";
    $r=mysqli_query($conn,$q);
    if($r){
        while($row=mysqli_fetch_assoc($r)){
            $email=$row['email_id'];
            $pass=$row['password'];
            $_SESSION['e']=$email;
            $_SESSION['p']=$pass;


        }
        if ($email_id1==$email && $password1==$pass) {
            header('location:dashboard.php');
      }
    }
    else{
        echo "not";
    }
}

?>
