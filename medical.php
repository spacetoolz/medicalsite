<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
<style>

</style>
<link rel="stylesheet" href="stylesheet\displayarea.css">
<!-- Title Icon-->

<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="shortcut icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
<link rel="shortcut icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
<link rel="shortcut icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
<link rel="shortcut icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


</head>
<body>
               
<div id="displayarea" class="row" style="padding:0px;">	
<?php
/*Ranike Williams |1201282 | necowill@gmail.com*/

	session_start();	//start or continue session
	 include 'boostrapLink.php'; 
	 include 'navbar.php';
//$_SESSION['ailmentType']=array();
	if(isset($_SESSION['Username'])&&($_SESSION['userpassword'])){
if(isset ($_SESSION['lname'])&&($_SESSION['fname'])&&($_SESSION['title'])&&($_SESSION['dob'])&&($_SESSION['gender'])){
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
	//$selected="";
	//$error=$_SESSION['sess_err'];
	
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	

//variables from contact page
/*	$streetAddress =$_POST['sAddress'] ;
	$addressLine2 =$_POST['address2'] ;
	$city =$_POST['city'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$hPhone = $_POST['hPhone'];
	$wPhone = $_POST['wPhone'];
	$cPhone = $_POST['cPhone'];
	$age1 = $_POST['age'];
	
	*/
	
//echo"$streetAddress-$addressLine2-$city-$country-<br>$email-$hPhone-$wPhone-$cPhone-Error $error " ;


	//check if session error flag was raised
if (isset ($_SESSION['sess_err'])&&($_SESSION['sess_err']==1))	
{
	
$_SESSION['sess_err'] = 0;				// 	reset the session flag to 0 so that the error doesn't loop
//		echo "There was an error!</br>";		//	display an error message
			
	/*$streetAddress =$_SESSION['streetAddress'];
	$addressLine2 =	$_SESSION['addressLine2'];
	$city =	$_SESSION['city'];
	$country = $_SESSION['country'];
	$email = $_SESSION['email'];
	$hPhone = $_SESSION['hPhone'];
	$wPhone =$_SESSION['wPhone'];
	$cPhone =$_SESSION['cPhone'];
	$age1 =$_SESSION['age1'];
	*/
	
	
	
	$height =$_SESSION['height'] ;
	$weight =$_SESSION['weight'] ;
	$age1 =$_SESSION['age'] ;
	$allergies = $_SESSION['allergies'] ;
	$bloodType = $_SESSION['bloodType'] ;
	
	//$bmi=$_SESSION['bmi'] ;
	//$bmiclass=$_SESSION['bmiclass'] ;
	
	
	
	
	
	
	$heighterror= $_SESSION['heighterror'] ;
	$weighterror= $_SESSION['weighterror'] ;
	$ageerror= $_SESSION['ageerror'] ;
	$allergieserror = $_SESSION['allergieserror']  ;
	$bloodTypeerror=  $_SESSION['bloodTypeerror']  ;
	$ailmentTypeerror=$_SESSION['ailmentTypeerror'];
			
}
else
{ 	$_SESSION['ailmentType']=array();
	//$height =11;
	//$weight =1100;
	//$allergies ="NONE";
	//$bloodType= "AB+";
	array_push($_SESSION['ailmentType'],"None");
	
	$heighterror= "";
	$weighterror="" ;
	$ageerror= "";
	$allergieserror ="" ;
	$bloodTypeerror= "" ;
	$ailmentTypeerror="";
	
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	
	
}


	/*$height =11;
	$weight =1100;
	$allergies ="NONE";
	$bloodType= "AB+";*/
	
	$height ="";
	$weight ="";
	$allergies ="";
	$bloodType= "AB+";
/**/

echo"



<center><h1> Medical Form</h1> </center>

<form action='medicalvalidation.php' method='POST' class='form-horizontal' >

	<div class='panel panel-primary'>
	  <div class='panel-heading'>
		<h2 class='panel-title'>Medical</h2>
	  </div>
	</div>
	   
	<center><iframe src='dateandtime.php' frameborder='0' width='426' height='85px' allowTransparency='true'></iframe></center>
	   
	<ul class='breadcrumb'>
	  <li><a href='#' data-toggle='modal' data-target='#demographicModal'>Demographic</a></li>
	  <li ><a href='#' data-toggle='modal' data-target='#contactModal'>Contact</a></li>
	  <li class='active'>Medical</li>
	</ul>
	   
	<center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>

	<div class='panel-body'>


		<fieldset class='input-group'>
		<legend>Info</legend>

		<div class='col-md-5 col-xs-6";if ($heighterror!=null) echo" has-error'";echo">
			  <label for='height' >Height</label>
			  <div class='input-group'>
			<input type = 'number' step='any' name = 'height' value='$height' placeholder = 'Height (meters)' title= 'Please enter your height' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-paste'></i></span>
	</div>
		<p class='errorsentence'>$heighterror</p>

			
			</div>

		<div class='col-md-5 col-xs-6";if ($weighterror!=null) echo" has-error'";echo">
		 <label for='weight' >Weight</label>
		 
		 <div class='input-group'>
			<input type = 'number' step='any' name = 'weight' value='$weight' placeholder = 'Weight (kilograms)' title= 'Please enter your weight' required class='form-control'>
				<span class='input-group-addon'><i class='fa fa-balance-scale' aria-hidden='true'></i></span>
			</div>
			<p class='errorsentence'>$weighterror</p>
			
			 
			
			
			</div>
			
			<div class='col-md-5 col-xs-6'>
			 <label for='age' >Age</label>
			<div class='input-group'>
			<input type = 'number' value='$age1' name ='age' placeholder = 'Age' title= 'Please enter age' required class='form-control' readonly></br>
			<span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
			</div>
			</div>
			
			<div class='col-md-5 col-xs-6";if ($allergieserror!=null) echo" has-error'";echo">
			  <label for='Allergies' >Allergies</label>
			<div class='input-group'>
			<input type = 'text' name = 'allergies' value='$allergies' placeholder = 'Allergies' title= 'Please enter any allergies' required class='form-control'></br>
				<span class='input-group-addon'><i class='fa fa-thermometer-three-quarters'></i></span>
				</div>
			<p class='errorsentence'>$allergieserror</p>
			</div>
			
		<div class='col-md-5 col-xs-6'>
			  <label for='BloodType' >Blood Type</label>	
			<div class='input-group'>
			<select name ='bloodType' class='form-control'>
											<option value = 'O' "; if ($bloodType=="O")echo"selected"; echo"> O</option>
											<option value = 'O+'"; if ($bloodType=="O+")echo"selected"; echo" > O+ </option>
											<option value = 'A-'"; if ($bloodType=="A-")echo"selected"; echo"> A-</option>
											<option value = 'A+'"; if ($bloodType=="A+")echo"selected"; echo"> A+ </option>
											<option value = 'B-'"; if ($bloodType=="B")echo"selected"; echo"> B-</option>
											<option value = 'B+'"; if ($bloodType=="B+")echo"selected"; echo"> B+</option>
											<option value = 'AB-'"; if ($bloodType=="AB-")echo"selected"; echo">AB- </option>
											<option value = 'AB+'"; if ($bloodType=="AB+")echo"selected"; echo"> AB+</option>
											</Select>
												<span class='input-group-addon'><i class='fa fa-heartbeat' style='color:red'></i></span>
								</div>
		</div>	
				


		<br><br><br>

		<div class='container pull-left'>

		<label for='sysAilmentType' >System Ailment Type:</label>
		<br>

		  
		 <ul>
		 <p class='errorsentence'>$ailmentTypeerror</p>
		 <li><input type='checkbox'  name='ailmentType[]' id='ailmentnone' value='None' onclick='uncheck()' ";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="None")echo"checked"; echo">None</li><br>
		 
		 <li> <span data-toggle='tooltip' data-placement='left' title='Circulates blood around the body via the heart, arteries and veins, delivering oxygen and nutrients
			   to organs and cells and carrying their waste products away.'>
				
			   <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType1' value='Cardiovascular/Circulatory system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Cardiovascular/Circulatory system")echo"checked"; echo">Cardiovascular/Circulatory system<br></span></li>
			   <br>
		  
		  <li><span data-toggle='tooltip' data-placement='left' title='Mechanical and chemical processes that provide nutrients via the mouth, esophagus, stomach
			   and intestines. Eliminates waste from the body.'>
			   <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType2' value='Digestive system/Excretory system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Digestive system/Excretory system")echo"checked"; echo">Digestive system/Excretory system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='Provides chemical communications within the body using hormones.'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType3' value='Endocrine system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Endocrine system")echo"checked"; echo">Endocrine system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='Skin, hair, nails, sweat and other exocrine glands.'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType4' value='Integumentary system/Exocrine system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Integumentary system/Exocrine system")echo"checked"; echo">Integumentary system/Exocrine system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='The system comprising a network of lymphatic vessels that carry a clear fluid called lymph. Defends the body against disease-causing agents.'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType5' value='Lymphatic system/Immune system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Lymphatic system/Immune system")echo"checked"; echo">Lymphatic system/Immune system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='Enables the body to move using muscles.Bones supporting the body and its organs.'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType6' value='Muscular system/Skeletal system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Muscular system/Skeletal system")echo"checked"; echo">Muscular system/Skeletal system<br></span></li>
		 <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='Collects and processes information from the senses via nerves and the brain and tells the muscles
			   to contract to cause physical actions.'>
			   <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType7' value='Nervous system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Nervous system")echo"checked"; echo">Nervous system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='The system where the kidneys filter blood.'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType8' value='Renal system/Urinary system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Renal system/Urinary system")echo"checked"; echo">Renal system/Urinary system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='The sex organs required for the production of offspring'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType9' value='Reproductive system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Reproductive system")echo"checked"; echo">Reproductive system<br></span></li>
		  <br>
		  <li><span data-toggle='tooltip' data-placement='left' title='The lungs and the trachea that bring air into the body'>
		  <input type='checkbox' name='ailmentType[]'  onclick='check()'id='ailmentType10' value='Respiratory system'";foreach($_SESSION['ailmentType'] as $selected)if ($selected=="Respiratory system")echo"checked"; echo">Respiratory system<br></span></li>
		  </ul>

		  </div>
			   
			
			 <div class='form-group'>
			  <label for='textArea' class='col-lg-2 control-label'>Health Details</label><br>
			  <div class='col-lg-10'>
				<textarea class='form-control' rows='3' id='healthDetails'></textarea>
			  </div>
			</div>
			
			
			<div class='form-group' style='text-align:center'>
			  <div class='col-lg-10 col-lg-offset-2'>
				<button type='reset' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span> Cancel</button>
				<button type='submit' name='submit' class='btn btn-primary'><span class='glyphicon glyphicon-send'></span> Submit</button>
			  </div>
			</div>
			
			</fieldset>
			
			
			
		<div class='progress progress-striped active'>
  <div class='progress-bar' style='width: 100%' ></div>
</div>
</form>	

			
	<!--Panel close-->
	<!--</div>-->
	</div>

	
 
 
 
 <!-- Trigger the modal with a link -->
<!--<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#contactModal'>Open Modal</button>-->

<!-- Modal -->
<div id='contactModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Contact</h4>
      </div>
      <div class='modal-body'>
        
		
	
     
		        <center>
<table style='width:90%' class='table table-striped table-hover table-bordered' >
  <tr class='info'>
    <th>Fields</th>
    <th>User Input</th> 
   </tr>
  <tr>
    <td>Street Address</td>
    <td>$streetAddress</td>
   </tr>
  <tr>
    <td>Address Line 2</td>
    <td>$addressLine2</td>
    
  </tr>
  <tr>
    <td>City</td>
    <td>$city</td>
  </tr> 
  <tr>
    <td>Country</td>
    <td>$country</td>
  </tr> 
  <tr>
    <td>Email</td>
    <td>$email</td>
  </tr> 
  <tr>  
    <td>Home Phone</td>  	
	<td>$hPhone </td>   
  </tr>
   <tr>  
    <td>Work Phone</td>  	
	<td>$wPhone </td>   
  </tr>
   <tr>  
    <td>Cell Phone</td>  	
	<td>$cPhone </td>   
  </tr>
</table>
</center>



	 </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>
	
	

  </div>
</div>



<!-- Modal Demographic-->

<div id='demographicModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Demographic</h4>
      </div>
      <div class='modal-body'>
        
		
	
	  
	  		        <center>
<table style='width:90%' class='table table-striped table-hover table-bordered' >
  <tr class='info'>
    <th>Fields</th>
    <th>User Input</th> 
   </tr>
  <tr>
    <td>Title</td>
    <td>$title</td>
   </tr>
  <tr>
    <td>Last Name</td>
    <td>$lname</td>
    
  </tr>
  <tr>
    <td>First Name</td>
    <td>$fname</td>
  </tr> 
  <tr>
    <td>Date of Birth</td>
    <td>$dob</td>
  </tr> 
  <tr>
    <td>Gender</td>
    <td>$gender</td>
  </tr> 
  
</table>
</center>	  
	  
	  	  
	  </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>
    </div>

	
  </div>
</div>
 
 	


 
";
}
else{
	echo "You are not authorized to be here, you will be redirected in 10 seconds <p>You will be redirected in <span id='counter'>10</span> second(s).</p>
<script type='text/javascript'>
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'demographic.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script> " ;
	//header('refresh: 10; url=demographic.php');
	//header('Location:demographic.php');	
}
	}
	else{
	echo "You are not authorized to be here, you will be redirected in 10 seconds <p>You will be redirected in <span id='counter'>10</span> second(s).</p>
<script type='text/javascript'>
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script> " ;
	//header('refresh: 10; url=demographic.php');
	//header('Location:demographic.php');	
}
?>








</div><!--Display Area closed-->
<?php include 'footer.php';?>
</body>
</html>
