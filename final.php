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

session_start();		// start or continue the session
include 'boostrapLink.php';
include 'navbar.php';
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

	

	
//echo"$height-$weight-$age-$allergies-<br>$bloodType <center>Height: $height<br>Weight: $weight<br>Age: $age<br>Allergies: $allergies<br>Blood Type: $bloodType<br></center>";


//$checked_count = count($_POST['ailmentType']);
//echo "You have selected following ".$checked_count." option(s): <br/>";

//foreach($_POST['ailmentType'] as $selected) {//echo "<p>".$selected ."</p>";echo "<p>.$selected .</p>";}

//echo "Today is " . date("Y/m/d") . "<br>". date("h:i:sa");

echo"



<center><h1> Final Page</h1> </center>

<form action='display.php' method='POST' class='form-horizontal' >

<div class='panel panel-primary'>
  <div class='panel-heading'>
    <h2 class='panel-title'>Medical</h2>
	
  </div>
 
   </div>
   <!--<iframe src='http://free.timeanddate.com/clock/i5ru8lzi/n120/tljm/fn7/fs16/fc009/tct/pct/ftbi/bas2/bat1/bacfff/pa8/tt0/tw1/th2/tb4' frameborder='0' width='226' height='65' allowTransparency='true'></iframe>
 -->
 <center><iframe src='dateandtime.php' frameborder='0' width='426' height='85px' allowTransparency='true'></iframe></center>
 
    <ul class='breadcrumb'>
  <li><a href='#' data-toggle='modal' data-target='#demographicModal'>Demographic</a></li>
  <li ><a href='#' data-toggle='modal' data-target='#contactModal'>Contact</a></li>
  <li ><a href='#' data-toggle='modal' data-target='#medicalModal'>Medical</a></li>
  <li class='active'>Final</li>
</ul>
   
   <center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>

  <div class='panel-body'>



<center>
<table style='width:90%' class='table table-striped table-hover table-bordered' >
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
<!--<button name='createPatient' type='submit' name='createpatient'><a href='display.php' class='btn btn-primary btn-lg'  ><span class='glyphicon glyphicon-send'></span> Create Patient</a> </button>
-->
<button name='createPatient' type='submit' name='createpatient' class='btn btn-primary btn-lg' ><span class='glyphicon glyphicon-send'></span> Create Patient</button>
	</center>
	<!--</div>-->

	
		<!--Panel close-->
	 </div>
</div>

	
 </form>
 
 <!-- Trigger the modal with a link -->
<!--<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#demographicModal'>Open Modal</button>-->

<!-- Modal -->
<div id='medicalModal' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>Medical</h4>
      </div>
      <div class='modal-body'>
        <center>
<table style='width:90%' class='table table-striped table-hover table-bordered' >
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
	foreach($_SESSION['ailmentType'] as $selected){
	
   echo" $selected<br> ";
   }
   
   echo"
   </td>
   
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







<!-- Modal BMI Chart-->
<div id='bmichart' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'>BMI Chart</h4>
      </div>
      <div class='modal-body'>
        <center>
<table style='width:90%' class='table table-striped table-hover table-bordered' >
  <tr class='info'>
    <th>Weight Class</th>
    <th>BMI Range - kg/m<sup>2</sup>  </th> 
   </tr>
  <tr>
    <td>Underweight</td>
    <td>< 18.8 kg/m<sup>2</sup>  </td>
   </tr>
  <tr>
    <td>Normal Weight</td>
    <td>18.5 - 24 kg/m<sup>2</sup> </td>
    
  </tr>
  <tr>
    <td>Over weight</td>
    <td>25 -30 kg/m<sup>2</sup> </td>
  </tr> 
  <tr>
    <td>Obese</td>
    <td> > 30 kg/m<sup>2</sup> </td>
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


<!-- Modal contact-->
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
?>




<?php include 'footer.php';?>


</div><!--Display Area closed-->
</body>
</html>