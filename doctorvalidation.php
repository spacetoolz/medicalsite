<?php


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
	session_start();		// start or continue the session
	
	$err_count = 0;			//flag for errors
	echo "path ".$target_file."<br> <img src='$target_file'/>";
	
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image. <br>";
        $uploadOk = 0;
    }

	
	
	
	
	//$title =$_POST['title'] ;
	$fname = ucwords($_POST['fname'] );
	$lname = ucwords($_POST['lname']);
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
		$_SESSION['lnameerror'] = "";	//set the last name to a session
		$_SESSION['fnameerror'] = "";	//set the first name to a session
		$_SESSION['titleerror'] = "";	// set title to session
		$_SESSION['doberror'] = "";	// set dob to session
		$_SESSION['gendererror'] = "";	// set gender to session
	
	
	
	
	
	//variables from contact section
	$streetAddress =$_POST['sAddress'];
	$addressLine2 =$_POST['address2'];
	$city =$_POST['city'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$hPhone = $_POST['hPhone'];
	$wPhone = $_POST['wPhone'];
	$cPhone = $_POST['cPhone'];
	$qualification = $_POST['qualification'];
	$profileInfo='profileInfo default';
	
		$_SESSION['streetAddresserror']="";
		$_SESSION['addressLine2error']="";
		$_SESSION['cityerror']="";
		$_SESSION['countryerror']="";
		$_SESSION['emailerror']="";
		$_SESSION['hPhoneerror']="";
		$_SESSION['wPhoneerror']="";
		$_SESSION['cPhoneerror']="";
		
	
	
	
	
	if($err_count == 0)	// if there is no error... 
	{
		$_SESSION['lname'] = $lname;	//set the last name to a session
		$_SESSION['fname'] = $fname;	//set the first name to a session
		//$_SESSION['title'] = $title;	// set title to session
		$_SESSION['dob'] = $dob;	// set dob to session
		//$_SESSION['dob'] = $refDate;	// set dob to session
		$_SESSION['gender'] = $gender;	// set gender to session
		//echo"reach";
		
		$_SESSION['streetAddress']=$streetAddress;
		$_SESSION['addressLine2']=$addressLine2;
		$_SESSION['city']=$city;
		$_SESSION['country']=$country;
		$_SESSION['email']=$email;
		$_SESSION['hPhone']=$hPhone;
		$_SESSION['wPhone']=$wPhone;
		$_SESSION['cPhone']=$cPhone;
		$_SESSION['qualification']=$qualification;
		
		
		
			//connect to database
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{
		$query_insertdoctor = "INSERT INTO `doctor2` (`doctorId`, `lastName`, `firstName`, `dateOfBirth`, `gender`, `streetAddress`, `addressLine2`, `city`, `country`, `email`, `homePhone`, `workPhone`, `cellPhone`, `qualification`, `photolocation`,profileInfo,`dateadded`) VALUES (NULL, '$lname', '$fname', '$dob', '$gender', '$streetAddress', '$addressLine2', '$city', '$country', '$email', '$hPhone', '$wPhone', '$cPhone','$qualification','$target_file','$profileInfo', CURRENT_TIMESTAMP)";
		mysqli_query($con, $query_insertdoctor);
		echo $target_file;
		echo "DOB".$dob;
		mysqli_close($con);
	}
		
		
		
		
		
		
		
		
		header('Location:doctors.php');		// jump to the display page (make sure to add a session_start();
	
	
	
	//echo "</br>Success. <a href = \"adddoctor.php\">Go back</a>";
	
	
	
	}
	else if($err_count == 1)		// if there is an error (flag raised)
	{
		$_SESSION['sess_err'] = 1;	// set a session flag
		$_SESSION['lname'] = $lname;	//set the last name to a session
		$_SESSION['fname'] = $fname;	//set the first name to a session
		//$_SESSION['title'] = $title;	// set title to session
		$_SESSION['dob'] = $dob;	// set dob to session
		$_SESSION['gender'] = $gender;	// set gender to session
		
		$_SESSION['streetAddress']=$streetAddress;
		$_SESSION['addressLine2']=$addressLine2;
		$_SESSION['city']=$city;
		$_SESSION['country']=$country;
		$_SESSION['email']=$email;
		$_SESSION['hPhone']=$hPhone;
		$_SESSION['wPhone']=$wPhone;
		$_SESSION['cPhone']=$cPhone;
		$_SESSION['qualification']=$qualification;
		
		
		
		echo "</br>Please correct your errors. <a href = \"adddoctor.php\">Go back</a>";
		//header('Location:demographic.php');		// jump to the display page (make sure to add a session_start();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}//isset close
	
	
	
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>