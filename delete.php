<?php
	//$did = 0;

	if ($_GET['did']){ //getting the user id from url
			$did = $_GET['did'];
		}

	$sql = "DELETE FROM privilege WHERE userId='$did'";
	$con = mysqli_connect("localhost", "root", "", "medical"); //connect to Database

	
	
	if (mysqli_query($con,$sql)){

		mysqli_close($con);

		header ("location:UserEditDelete.php");
		
	}else{
		die ("could not connect to database");
		
	}

	//mysqli_close($con);
?>