<?php
	
	
	
	$fname = $lname = $usrname = $pswrd = $usrEmail = $type = $staffId="";

	//print_r $_POST;
	
	if (isset($_POST['btn_submit'])){
		//echo "You are here!";
		
		$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
			//check if error to connect to database
		if(mysqli_error($con))
		{
			die("There was an error in connecting to database");
		}
		else
		{
			
			$errors = array(); //created an error array
			
			if (empty($_POST['fname'])||(strlen($_POST['fname']) < 2)){ //if no first name
				$errors['fname1']="*First name is required*"; //flag error
			}else {
				//if there is a fname assign it to fname
				$fname = ucwords(test_input ($_POST["fname"]));
			}

			if (empty($_POST['lname'])|| (strlen($_POST['lname']) < 2)){ //no last name
				$errors['lname1']="*Last name is required*";
			}else {
				$lname = ucwords(test_input ($_POST["lname"]));
			}
			
			
			$type = $_POST['type'];
			
			;
			if (empty ($_POST['usrEmail'])){
			$errors ['email1']="*Email address is required*";
			}else{
				$usrEmail = test_input($_POST['usrEmail']);
				//echo $email;
				 // check if e-mail address is well-formed
				if (!filter_var($usrEmail, FILTER_VALIDATE_EMAIL)) {
					$errors['email1'] = "*Invalid email format (someone@email.com)*"; 
				}
				
			}
			
			if (empty($_POST['usrname'])|| (strlen($_POST['usrname']) < 2)){ //no login name or too short
				$errors['usrname']="*Username is required*";
			}else {
				$usrname = test_input ($_POST["usrname"]);
			}
			
			$pswrd = $_POST['pswrd'];
			$staffId = $_POST['staffId'];
			
			
			if (count($errors)==0){
				$query_insPrivilege ="UPDATE privilege SET fname='$fname', lname='$lname', userName='$usrname', password='$pswrd', email='$usrEmail', userType='$type', staffId='$staffId' WHERE userId='$_POST[userid]'";
				
				mysqli_query($con, $query_insPrivilege);
				
				//calling back the page to show the updated record and able to continue.
				//header("location:UserEditDelete.php");
			}else{
				//echo "Did not enter into database!";
			}
		}
	}
	
	function test_input($data) { //function that removes any special characters
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	

?>