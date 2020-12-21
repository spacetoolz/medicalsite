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
session_start();
include 'boostrapLink.php';
include 'navbar.php';
if (isset($_POST['createpatient']))
{echo "test";}
include 'insert.php';
		// start or continue the session
//$_SESSION['ailmentType2']=array();
//if(isset($_POST['submit'])){
	
//if(!empty($_POST['ailmentType'])) {

	//variables from demographic page
	/*$height =$_POST['height'] ;
	$weight =$_POST['weight'] ;
	$age =$_POST['age'];
	$allergies = $_POST['allergies'];
	$bloodType = $_POST['bloodType'];
	//$sysAilmentType = $_POST['sysAilmentType'];
	$bmi=$weight/($height*$height);
	$bmiclass="empty";
	*/
	
if(isset ($_SESSION['lname'])&&($_SESSION['fname'])&&($_SESSION['title'])&&($_SESSION['dob'])&&($_SESSION['gender'])){	
	$height =$_SESSION['height'] ;
	$weight =$_SESSION['weight'] ;
	$age =$_SESSION['age'] ;
	$allergies = $_SESSION['allergies'] ;
	$bloodType = $_SESSION['bloodType'] ;
	$bmi=$_SESSION['bmi'] ;
	$bmiclass=$_SESSION['bmiclass'] ;
	
	
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
	
	
	//variables from demographic page
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	
	//BMI weight class 
	if( $bmi < 18.5)
	{
		$bmiclass= 'Underweight';
	}
	if( $bmi >= 18.5 & $bmi< 25 )
	{
		$bmiclass= 'Normal weight';
	}
	if( $bmi >= 25 & $bmi< 30 )
	{
		$bmiclass= 'Overweight';
	}
	if( $bmi >= 30 )
	{
		$bmiclass= 'Obese';
	}

	

	



echo "


<div id='diplayTab'>
<center><iframe src='dateandtime.php' frameborder='0' width='426' height='85px' allowTransparency='true'></iframe></center>

<div class='alert alert-dismissible alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <center><strong>Patient updated successfully</strong></center>
</div>

<ul class='nav nav-tabs'>
  <li class='active'><a href='#demographicTab' data-toggle='tab' aria-expanded='true'>Demographic</a></li>
  <li class=''><a href='#contactTab' data-toggle='tab' aria-expanded='false'>Contact</a></li>
  <li class=''><a href='#medicalTab' data-toggle='tab' aria-expanded='false'>Medical</a></li>
 <!-- <li class='dropdown'>
    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
      Dropdown <span class='caret'></span>
    </a>
    <ul class='dropdown-menu'>
      <li><a href='#dropdown1' data-toggle='tab'>Action</a></li>
      <li class='divider'></li>
      <li><a href='#dropdown2' data-toggle='tab'>Another action</a></li>
    </ul>
  </li>-->
</ul>


<div id='myTabContent' class='tab-content'>
  <div class='tab-pane fade active in' id='demographicTab'>
    <center>
	<center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>
<table style='width:100%' class='table table-striped table-hover table-bordered' >
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
<center>
<a href='demographic.php' class='btn btn-primary btn-md' ><span class='fa fa-user-plus'></span> New Patient</a>
	</center>
	</div>
	
  <div class='tab-pane fade' id='contactTab'>
  		        <center>
				<center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>
<table style='width:100%' class='table table-striped table-hover table-bordered' >
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
<center>
<a href='demographic.php' class='btn btn-primary btn-md' ><span class='fa fa-user-plus'></span> New Patient</a>
	</center>
     </div>
	 
	 <div class='tab-pane fade' id='medicalTab'>

<center>
<center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>
<table style='width:100%' class='table table-striped table-hover table-bordered' >
  <tr class='info'>
    <th>Fields</th>
    <th>User Input</th> 
   </tr>
  <tr>
    <td>Height</td>
    <td>$height meters </td>
   </tr>
  <tr>
    <td>Weight</td>
    <td>$weight kilograms</td>
    
  </tr>
  <tr>
    <td>Age</td>
    <td>$age years</td>
  </tr> 
  <tr>
    <td>Allergies</td>
    <td>$allergies</td>
  </tr> 
  <tr>
    <td>BloodType</td>
    <td>$bloodType</td>
  </tr> 
  
  <tr>
  
    <td>System Ailment Type</td>  
	
	<td>" ;
	//if($checked_count>0){
		foreach($_SESSION['ailmentType'] as $selected){
	
  
	
   echo" $selected<br> ";
   }
   //}
   //if($checked_count=0){echo"None";}
   
   echo"
   </td>
   
  </tr>
   <tr>
    <td>Body Mass Index (B.M.I.)</td>
    <td><a href='#' data-toggle='modal' data-target='#bmichart'>BMI Chart</a><br>$bmi kg/m<sup>2</sup><br> $bmiclass</td>
  </tr> 
</table>
</center>
	 <center>
<a href='demographic.php' class='btn btn-primary btn-md' ><span class='fa fa-user-plus'></span> New Patient</a>
	</center>
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

?>




</div><!--Display Area closed-->
<?php include 'footer.php';?>
</body>
</html>