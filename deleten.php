<?php

 $conn = mysqli_connect("localhost","root","","ediary");

 if (isset($_GET['deleteid'])) {
 	$sno=$_GET['deleteid'];

 	$q="DELETE FROM notes WHERE sno=$sno";
 	$r=mysqli_query($conn,$q);
 	if ($r) {
 		header('location:managen.php');
 	} else {
 		die(mysqli_error($conn));
 	}
 	
 }

?>
