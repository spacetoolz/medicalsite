<?php
session_start();		// start or continue the session
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//$primaryKey = $_GET['id'];
			
			/*$patient=$_POST['patient'];
			$doctor=$_POST['doctor'];
			$appDate=$_POST['appDate'];
			$appTime=$_POST['appTime'];
			$comment=$_POST['comment'];*/
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{
		if(isset($_POST['btn_updateAppointment']))
		{	$primaryKey = $_POST['id'];
			$patient=$_POST['patient'];
			$doctor=$_POST['doctor'];
			$appDate=$_POST['appDate'];
			$appTime=$_POST['appTime'];
			$comment=$_POST['comment'];
			
			
			$query_updateAppointment = "update appointment set patientName='$patient',appDate='$appDate', appTime='$appTime', doctorName='$doctor', Comments='$comment' WHERE appID= $primaryKey";
			mysqli_query($con, $query_updateAppointment);
			mysqli_close($con);
			header('Location:appointment.php');
		}
		if(isset($_POST['btn_updatePatient']))
		{
			
			
			echo"updatePatient";
			$patientId =$_POST['patientId'] ;
			$title =$_POST['title'] ;
			$fname = ucwords($_POST['fname'] );
			$lname = ucwords($_POST['lname']);
			$dob = $_POST['dob'];
			$gender = $_POST['gender'];
			
			echo $dob;
			$streetAddress =$_POST['sAddress'];
			$addressLine2 =$_POST['address2'];
			$city =$_POST['city'];
			$country = $_POST['country'];
			$email = $_POST['email'];
			$hPhone = $_POST['hPhone'];
			$wPhone = $_POST['wPhone'];
			$cPhone = $_POST['cPhone'];
	
			$height =$_POST['height'] ;
			$weight =$_POST['weight'] ;
			$age =$_POST['age'];
			$allergies = $_POST['allergies'];
			$bloodType = $_POST['bloodType'];
			$bmi=$_POST['bmi'];
			//$bmi=$weight/($height*$height);
			
			function ageCalculator($dob){
			if(!empty($dob)){
				$birthdate = new DateTime($dob);
				$today   = new DateTime('today');
				$age = $birthdate->diff($today)->y;
			return $age;
			}
			else{
				return 0;
				}
	}
	
			$age=ageCalculator($dob);
	
			$query_updatePatient="UPDATE `patient` SET `Title` = '$title', `lastName` = '$lname', `firstName` = '$fname', 
			`dateOfBirth` = '$dob', `gender` = '$gender', `streetAddress` = '$streetAddress', `addressLine2` = '$addressLine2', 
			`city` = '$city', `country` = '$country', `email` = '$email', `homePhone` = '$hPhone', `workPhone` = '$wPhone', 
			`cellPhone` = '$cPhone',`height` = '$height', `weight` = '$weight', `age` = '$age', `allergy` = '$allergies', 
			`bloodType` = '$bloodType', `bmi` = '$bmi' 
			WHERE `patient`.`patientId` = '$patientId'";
			mysqli_query($con, $query_updatePatient);
			mysqli_close($con);
			header('Location:patients.php');
			
		}
		
		if(isset($_POST['btn_updateDoctor']))
		{	echo "update doctor";
	
	
				$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			//if(isset($_POST["submit"])) {
				
				
				$err_count = 0;			//flag for errors
				echo "path ".$target_file."<br> <img src='$target_file'/>";
				
				if(isset($_POST["btn_updateDoctor"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".<br>";
					$uploadOk = 1;
				} else {
					echo "File is not an image. <br>";
					$uploadOk = 0;
				}
				}
				
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
	
			$doctorId = $_POST['doctorId'] ;
			$fname = ucwords($_POST['fname'] );
			$lname = ucwords($_POST['lname']);
			$city =$_POST['city'];
			$email = $_POST['email'];
			
			$wPhone = $_POST['wPhone'];
			$cPhone = $_POST['cPhone'];
			$qualification = $_POST['qualification'];
			$profileInfo = $_POST['profileInfo'];
	
	
	
	
			$query_updateDoctor="UPDATE `doctor2` SET `lastName` = '$lname', `firstName` = '$fname', `city` = '$city', 
			`email` = '$email', `workPhone` = '$wPhone', `cellPhone` = '$cPhone', `qualification` = '$qualification', 
			`photolocation` = '$target_file', `profileInfo` = '$profileInfo' 
			WHERE `doctor2`.`doctorId` = $doctorId";
			mysqli_query($con, $query_updateDoctor);
			mysqli_close($con);
			header('Location:doctors.php');
		}
		if(isset($_POST['btn_updateNurse']))
		{	
	
	
			echo "update doctor";
	
	
				$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			//if(isset($_POST["submit"])) {
				
				
				$err_count = 0;			//flag for errors
				echo "path ".$target_file."<br> <img src='$target_file'/>";
				
				if(isset($_POST["btn_updateDoctor"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".<br>";
					$uploadOk = 1;
				} else {
					echo "File is not an image. <br>";
					$uploadOk = 0;
				}
				}
				
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
	
			$doctorId = $_POST['doctorId'] ;
			$fname = ucwords($_POST['fname'] );
			$lname = ucwords($_POST['lname']);
			$city =$_POST['city'];
			$email = $_POST['email'];
			
			$wPhone = $_POST['wPhone'];
			$cPhone = $_POST['cPhone'];
			$qualification = $_POST['qualification'];
			$profileInfo = $_POST['profileInfo'];
	
	
	
	
			$query_updateNurse="UPDATE `nurse2` SET `lastName` = '$lname', `firstName` = '$fname', `city` = '$city', 
			`email` = '$email', `workPhone` = '$wPhone', `cellPhone` = '$cPhone', `qualification` = '$qualification', 
			`photolocation` = '$target_file', `profileInfo` = '$profileInfo' 
			WHERE `nurse2`.`nurseId` = $doctorId";
			
	
	
	
	
	
			mysqli_query($con, $query_updateNurse);
			mysqli_close($con);
			header('Location:index.php');
			//header('Location:nurse.php');
		}
		
		
		
		
		if(isset($_POST['btn_updateAilment']))
		{ 
			$patientId = $_POST['patientId'] ;
			$ailmentId = $_POST['ailmentId'] ;
			$ailmentName = $_POST['ailmentName'] ;
			
			$query_updateAilment="UPDATE `ailment` SET 
			`Name`='$ailmentName' 
			WHERE ailment.AID='$ailmentId' 
			AND ailment.PID='$patientId'
			";
			
	
	
	
	
	
			mysqli_query($con, $query_updateAilment);
			mysqli_close($con);
			header('Location:patients.php');
			
			
		}
		
		
		
		
		
		
	}
?>