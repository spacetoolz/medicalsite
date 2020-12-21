<?php
/*Ranike Williams |1201282 | necowill@gmail.com*/
session_start();		// start or continue the session

$err_count = 0;			//flag for errors

if (isset($_POST['submit']))		//if the submit button is pressed then do stuff below
{
	//$name = $_POST['name'];		// store values from form to local variables
	//$status = $_POST['status'];
	
	//variables from contact page
	$streetAddress =$_POST['sAddress'];
	$addressLine2 =$_POST['address2'];
	$city =$_POST['city'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$hPhone = $_POST['hPhone'];
	$wPhone = $_POST['wPhone'];
	$cPhone = $_POST['cPhone'];
	$age1 = $_POST['age'];
	
		$_SESSION['streetAddresserror']="";
		$_SESSION['addressLine2error']="";
		$_SESSION['cityerror']="";
		$_SESSION['countryerror']="";
		$_SESSION['emailerror']="";
		$_SESSION['hPhoneerror']="";
		$_SESSION['wPhoneerror']="";
		$_SESSION['cPhoneerror']="";
		$_SESSION['age1error']="";
	
	//echo "$name, $status";
	
	if(($streetAddress == NULL)||(strlen($streetAddress) < 2))	// if the name is blank or less than 2 characters
	{$_SESSION['streetAddresserror']="Please enter a valid Street Address, with more than 1 character.";
		echo "Please enter a valid Street Address, with more than 1 character.</br>";
		$err_count = 1;		// raise the flag
	}
	
	if(($addressLine2 == NULL)||(strlen($addressLine2) < 2))	// if the name is blank or less than 2 characters
	{$_SESSION['addressLine2error']="Please enter a valid Address Line 2, with more than 1 character.";
		echo "Please enter a valid Address Line 2, with more than 1 character.</br>";
		$err_count = 1;		// raise the flag
	}
	if(($city == NULL)||(strlen($city) < 2))	// if the name is blank or less than 2 characters
	{$_SESSION['cityerror']="Please enter a valid City, with more than 1 character";
		echo "Please enter a valid City, with more than 1 character.</br>";
		$err_count = 1;		// raise the flag
	}
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("$email is a valid email address </br>");
	} 	else {
		$_SESSION['emailerror']="not a valid email address";
			echo("$email is not a valid email address</br>");
			$err_count = 1;	
			}
	if (!preg_match("#\d{3}[\-]\d{3}[\-]\d{4}#",$hPhone)) 
	{$_SESSION['hPhoneerror']="Invalid phone number format try : 876-123-4567";
		echo "Invalid phone</br>";
		$err_count = 1;			
	}
	if (!preg_match("#\d{3}[\-]\d{3}[\-]\d{4}#",$cPhone)) 
	{$_SESSION['cPhoneerror']="Invalid phone number format try : 876-123-4567";
		echo "Invalid phone</br>";
		$err_count = 1;			
	}if (!preg_match("#\d{3}[\-]\d{3}[\-]\d{4}#",$wPhone)) 
	{$_SESSION['wPhoneerror']="Invalid phone number format try : 876-123-4567";
		echo "Invalid phone number format try : 876-123-4567</br>";
		$err_count = 1;			
	}
	/*
	if($status == NULL)	//if the status is not chosen
	{
		echo "Please enter a valid status.</br>";
		$err_count = 1;		//raise the lag
	}
	*/
	if($err_count == 0)	// if there is no error... 
	{
		//$_SESSION['name'] = $name;	//set the name to a session
		//$_SESSION['status'] = $status;	// set status to session
		
		$_SESSION['streetAddress']=$streetAddress;
		$_SESSION['addressLine2']=$addressLine2;
		$_SESSION['city']=$city;
		$_SESSION['country']=$country;
		$_SESSION['email']=$email;
		$_SESSION['hPhone']=$hPhone;
		$_SESSION['wPhone']=$wPhone;
		$_SESSION['cPhone']=$cPhone;
		$_SESSION['age1']=$age1;
		
		header('Location:medical.php');		// jump to the display page (make sure to add a session_start();
	}
	else if($err_count == 1)		// if there is an error (flag raised)
	{
		$_SESSION['sess_err'] = 1;	// set a session flag
		//$_SESSION['name'] = $name;	//set the name to a session
		//$_SESSION['status'] = $status;	// set status to session
		
		$_SESSION['streetAddress']=$streetAddress;
		$_SESSION['addressLine2']=$addressLine2;
		$_SESSION['city']=$city;
		$_SESSION['country']=$country ;
		$_SESSION['email']=$email ;
		$_SESSION['hPhone']=$hPhone;
		$_SESSION['wPhone']=$wPhone ;
		$_SESSION['cPhone']=$cPhone ;
		$_SESSION['age1']=$age1;
		
		
		echo "</br>Please correct your errors. <a href = \"contact.php\">Go back</a>";
		header('Location:contact.php');
	}
}
else
{
	echo "You should not be here. <a href = \"form.php\">Go back</a>";
}
?>