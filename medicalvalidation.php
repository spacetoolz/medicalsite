<?php
/*Ranike Williams |1201282 | necowill@gmail.com*/
session_start();		// start or continue the session
$_SESSION['ailmentType']=array();
$err_count = 0;			//flag for errors

if (isset($_POST['submit']))		//if the submit button is pressed then do stuff below
{
	//$name = $_POST['name'];		// store values from form to local variables
	//$status = $_POST['status'];
	
	//echo "$name, $status";
	
	$height =$_POST['height'] ;
	$weight =$_POST['weight'] ;
	$age =$_POST['age'];
	$allergies = $_POST['allergies'];
	$bloodType = $_POST['bloodType'];
	$bmi=$weight/($height*$height);
	$bmiclass="empty";
	
	
	foreach($_POST['ailmentType'] as $selected){	
	   echo" $selected<br> ";
	   array_push($_SESSION['ailmentType'],$selected);	
		}

	
	/*$height =$_SESSION['height'] ;
	$weight =$_SESSION['weight'] ;
	$age =$_SESSION['age'] ;
	$allergies = $_SESSION['allergies'] ;
	$bloodType = $_SESSION['bloodType'] ;
	$bmi=$_SESSION['bmi'] ;
	$bmiclass=$_SESSION['bmiclass'] ;*/

	/*$height =NULL;
	$weight = NULL;
	$checked_count = NULL;
	$allergies = NULL;*/
	$_SESSION['heighterror']= "";
	$_SESSION['weighterror']="" ;
	$_SESSION['ageerror']= "";
	$_SESSION['allergieserror'] ="" ;
	$_SESSION['bloodTypeerror']= "" ;
	$_SESSION['ailmentTypeerror']="";
	
	if($height == NULL||$height <=0)	//if the status is not chosen
	{$_SESSION['heighterror']= "Please enter a valid height";
		echo "Please enter a valid height.</br>";
		$err_count = 1;		//raise the lag
	}
	if($weight == NULL||$weight <=0)	//if the status is not chosen
	{$_SESSION['weighterror']="Please enter a valid weight" ;
		echo "Please enter a valid weight.</br>";
		$err_count = 1;		//raise the lag
	}
	if($allergies == NULL)	//if the status is not chosen
	{$_SESSION['allergieserror']="Please enter a valid allergy" ;
		echo "Please enter a valid weight.</br>";
		$err_count = 1;		//raise the lag
	}
	
	
	$checked_count = count($_SESSION['ailmentType']);
	if($checked_count == NULL)	//if the status is not chosen
	{$_SESSION['ailmentTypeerror']="Please enter a valid ailmentType or select None";
		echo "Please enter a valid ailmentType or select None.</br>";
		$err_count = 1;		//raise the lag
	}
	
	if($err_count == 0)	// if there is no error... 
	{
		//$_SESSION['name'] = $name;	//set the name to a session
		//$_SESSION['status'] = $status;	// set status to session
		
	$_SESSION['height']= $height ;
	$_SESSION['weight']=$weight  ;
	$_SESSION['age']= $age;
	$_SESSION['allergies'] =$allergies  ;
	$_SESSION['bloodType']= $bloodType  ;
	$_SESSION['bmi']= $bmi;
	$_SESSION['bmiclass']= $bmiclass;
	
		
		header('Location:final.php');		// jump to the display page (make sure to add a session_start();
	}
	else if($err_count == 1)		// if there is an error (flag raised)
	{
		$_SESSION['sess_err'] = 1;	// set a session flag
		
		$_SESSION['height']= $height ;
		$_SESSION['weight']=$weight  ;
		$_SESSION['age']= $age;
		$_SESSION['allergies'] =$allergies  ;
		$_SESSION['bloodType']= $bloodType  ;
		//$_SESSION['ailmentType']=array();
	
		header('Location:medical.php');	
		echo "</br>Please correct your errors. <a href = \"medical.php\">Go back</a>";
	}
}
else
{
	echo "You should not be here. <a href = \"medical.php\">Go back</a>";
}
?>