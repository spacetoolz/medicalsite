<?php
	//session_start();
	//if (isset())		//if the submit button is pressed then do stuff below
//{
	//$name = $_SESSION['name'];
	//$status = $_SESSION['status'];
	
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	//variables from contact page
	$streetAddress =$_SESSION['streetAddress'];
	$addressLine2 =	$_SESSION['addressLine2'];
	$city =	$_SESSION['city'];
	$country = $_SESSION['country'];
	$email = $_SESSION['email'];
	$hPhone = $_SESSION['hPhone'];
	$wPhone =$_SESSION['wPhone'];
	$cPhone =$_SESSION['cPhone'];
	$age1 =$_SESSION['age1'];
	
	$height =$_SESSION['height'] ;
	$weight =$_SESSION['weight'] ;
	$age =$_SESSION['age'] ;
	$allergies = $_SESSION['allergies'] ;
	$bloodType = $_SESSION['bloodType'] ;
	$bmi=$_SESSION['bmi'] ;
	$bmiclass=$_SESSION['bmiclass'] ;
	
	//echo "'$title', '$lname', '$fname', '$dob', '$gender', '$streetAddress', '$addressLine2', '$city', '$country', '$email', '$hPhone', '$wPhone', '$cPhone', '$height', '$weight', '$age1', '$allergies', '$bloodType'";
		
	
	//echo "Name: ". $_SESSION['name']." </br> Status: ". $_SESSION['status']."</br><hr>";
	
	
	//connect to database
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{
		/* concatinated
		$query = "INSERT INTO demo_tbl (Name, Status) VALUES(\"".$_SESSION['name']."\", \"".$_SESSION['status']."\")";
		
		*/
		//$query_ins = "INSERT INTO demo_tbl (Name, Status) VALUES (\"$name\", \"$status\")";
		//$query_ins = "INSERT INTO demo_tbl (Name, Status) VALUES (\"$name\", \"$status\")"; 
		$query_ins = "INSERT INTO Patient (patientId,Title,lastName, firstName, dateOfBirth, gender, streetAddress, addressLine2, city, country, email, homePhone, workPhone, cellPhone, height, weight, age, allergy, bloodType,bmi) 
		VALUES (null,'$title', '$lname', '$fname', '$dob', '$gender', '$streetAddress', '$addressLine2', '$city', '$country', '$email', '$hPhone', '$wPhone', '$cPhone', '$height', '$weight', '$age1', '$allergies', '$bloodType','$bmi')";
		//echo "</br><hr></br>$query_sel";
		
		
		//INSERT INTO `patient` (`patientId`, `Title`, `lastName`, `firstName`, `dateOfBirth`, `gender`, `streetAddress`, `addressLine2`, `city`, `country`, `email`, `homePhone`, `workPhone`, `cellPhone`, `height`, `weight`, `age`, `allergy`, `bloodType`) VALUES (NULL, '', 'Ready', '', '1994-5-6', '', '', '', '', '', '', '', '', '', '11', '110', '0', '', '')
		mysqli_query($con, $query_ins);
		//$_session['value']=printf("Last inserted record has id %d\n", mysqli_insert_id($con));
		
		$_session['value']=mysqli_insert_id($con);
		$newPatientId=mysqli_insert_id($con);
			
			foreach($_SESSION['ailmentType'] as $selected){
	$query_ins = "INSERT INTO ailment (AID, PID, Name) VALUES (NULL, '$newPatientId', '$selected')";
  // echo" $selected<br> ";
  mysqli_query($con, $query_ins);
   }
		
	


	
		//echo "</br></br> <a href = \"form.php\">Go back to form</a>";
		mysqli_close($con);
		//header('Location: records.php');
	}

?>