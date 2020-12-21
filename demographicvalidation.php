<?php
/*Ranike Williams |1201282 | necowill@gmail.com*/
/*if(count($errors)>0):?>
<?php	foreach ($errors as $error):?>
<?php	echo $error;*/

session_start();		// start or continue the session

$err_count = 0;			//flag for errors

if (isset($_POST['submit']))		//if the submit button is pressed then do stuff below
{
	//$name = $_POST['name'];		// store values from form to local variables
	//$status = $_POST['status'];
	
	//variables from demographic page
	$title =$_POST['title'] ;
	$fname = ucwords($_POST['fname'] );
	$lname = ucwords($_POST['lname']);
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	
		$_SESSION['lnameerror'] = "";	//set the last name to a session
		$_SESSION['fnameerror'] = "";	//set the first name to a session
		$_SESSION['titleerror'] = "";	// set title to session
		$_SESSION['doberror'] = "";	// set dob to session
		$_SESSION['gendererror'] = "";	// set gender to session
	
	//echo "$name, $status";
	
	if(($lname == NULL)||(strlen($lname) < 2))	// if the name is blank or less than 2 characters
	{$_SESSION['lnameerror'] = "*Please enter a valid last name, with more than 1 character";
		echo "Please enter a valid last name, with more than 1 character.</br>";
		$err_count = 1;		// raise the flag
		//array_push($errors,"Please enter a valid last name, with more than 1 character.");
	}
	if(($fname == NULL)||(strlen($fname) < 2))	// if the name is blank or less than 2 characters
	{$_SESSION['fnameerror'] = "*Please enter a valid first name, with more than 1 character";
		echo "Please enter a valid first name, with more than 1 character.</br>";
		$err_count = 1;		// raise the flag
		//array_push($errors,"Please enter a valid first name, with more than 1 character.");
	}date_default_timezone_set("America/Jamaica");
	//$cdate = date("m/d/Y");
	$cdate = date("Y-m-d");
	
	echo $cdate ."<br>";
	echo $dob ."<br>";
//$refDate = date("m/d/Y", strtotime($dob));
$refDate = date("Y-m-d", strtotime($dob));

echo $refDate."<br>";
echo $cdate-$refDate."<br>";
echo strlen($dob)."<br>";

if ($refDate > $cdate ) 
{
  $_SESSION['doberror'] = "*Please enter a valid date, before today's date";
		echo "*Please enter a valid date, before today's date.</br>";
		$err_count = 1;		// raise the flag
}

	if(($dob == NULL)||(strlen($dob) < 10) ||(strlen($dob) > 10) ||
	(!preg_match("#(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d#",$dob)) )	// if the name is blank or less than 10 characters
	{$_SESSION['doberror'] = "*Please enter a valid date, in the format mm/dd/yyyy";
		echo "Please enter a valid date, in the format mm/dd/yyyy.</br>";
		$err_count = 1;		// raise the flag
		//array_push($errors,"Please enter a valid first name, with more than 1 character.");
	}
	
		
	if($err_count == 0)	// if there is no error... 
	{
		$_SESSION['lname'] = $lname;	//set the last name to a session
		$_SESSION['fname'] = $fname;	//set the first name to a session
		$_SESSION['title'] = $title;	// set title to session
		//$_SESSION['dob'] = $dob;	// set dob to session
		$_SESSION['dob'] = $refDate;	// set dob to session
		$_SESSION['gender'] = $gender;	// set gender to session
		//echo"reach";
		header('Location:contact.php');		// jump to the display page (make sure to add a session_start();
	}
	else if($err_count == 1)		// if there is an error (flag raised)
	{
		$_SESSION['sess_err'] = 1;	// set a session flag
		$_SESSION['lname'] = $lname;	//set the last name to a session
		$_SESSION['fname'] = $fname;	//set the first name to a session
		$_SESSION['title'] = $title;	// set title to session
		$_SESSION['dob'] = $dob;	// set dob to session
		$_SESSION['gender'] = $gender;	// set gender to session
		echo "</br>Please correct your errors. <a href = \"demographic.php\">Go back</a>";
		header('Location:demographic.php');		// jump to the display page (make sure to add a session_start();
	}
}
else
{
	echo "You should not be here. <a href = \"demographic.php\">Go back</a>";
}
?>