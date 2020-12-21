<!DOCTYPE html>
<html>
<head>
<title>Demographic</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

 $(document).ready(function() {
   //$("#divReadOnlyFields :input").attr("disabled", true);
 });
 
 
</script>
</head>
<body>
               
<div id="displayarea" class="row" style="padding:0px;">	

<?php
/*Ranike Williams |1201282 | necowill@gmail.com*/
session_start();	//start or continue session
include 'boostrapLink.php'; 
include 'navbar.php';

if(isset($_SESSION['Username'])&&($_SESSION['userpassword'])){

//check if session error flag was raised
if (isset ($_SESSION['sess_err'])&&($_SESSION['sess_err']==1))	
{
	
	$_SESSION['sess_err'] = 0;				// 	reset the session flag to 0 so that the error doesn't loop
	//echo "There was an error!</br>";		//	display an error message
	//$name = $_SESSION['name'];			//	
	
	
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	
		$lnameerror=$_SESSION['lnameerror'];	//set the last name to a session
		$fnameerror=$_SESSION['fnameerror'];	//set the first name to a session
		$titleerror=$_SESSION['titleerror'];	// set title to session
		$doberror=$_SESSION['doberror'];	// set dob to session
		//$gendererror=$_SESSION['gendererror'];
	
}
else
{ 		
	
	/*$fname ="John";
	$lname ="Smith";
	$dob = "12/31/1995";
	$title="Mr";
	$gender="Male";*/
	$fname ="";
	$lname ="";
	$dob = "";
	$title="Mr";
	$gender="Male";
	//$gender = document.getElementById("gendermale").checked ;
	
	
	
		$lnameerror="";	//set the last name to a session
		$fnameerror="";	//set the first name to a session
		$titleerror="";	// set title to session
		$doberror="";
}





echo "

<div id='divReadOnlyFields' >
<!--<center><h1> Demographic Info.</h1> </center>
<br>-->
<form action='demographicvalidation.php' method='POST' class='form-horizontal' name='demographicForm' id='demographicForm'>



<div class='panel panel-primary'>
  <div class='panel-heading'>
	<h1 class='panel-title'>Demographic</h1>
  </div>
  
  <center><iframe src='dateandtime.php' frameborder='0' width='426' height='85px' allowTransparency='true'></iframe></center>
  
  <center><img src='caduceus.jpg' alt='LOGO' style='width:100px;height:100px; text-align:center;'></center>

  <div class='panel-body'>



<fieldset >

<legend>Demographic Info</legend>

<div class='col-md-5 col-xs-6'>
      <label for='BloodType' >Title</label>	
	  <div class='input-group'>
	<select name ='title' id='title' class='form-control'>
									<option value = 'Mr.' "; if ($title=="Mr.")echo"selected"; echo"> Mr.</option>
									<option value = 'Miss'"; if ($title=="Miss")echo"selected"; echo"> Miss </option>
									<option value = 'Mrs.'"; if ($title=="Mrs.")echo"selected"; echo"> Mrs.</option>
									<option value = 'Dr.' "; if ($title=="Dr.")echo"selected"; echo"> Dr. </option>
									<option value = 'Rev.'"; if ($title=="Rev.")echo"selected"; echo"> Rev.</option>
									<option value = 'Captain'"; if ($title=="Captain")echo"selected"; echo"> Captain</option>
									<option value = 'Hon.'"; if ($title=="Hon.")echo"selected"; echo">Hon. </option>
									<!--<option value = 'AB+'> AB+</option> -->
	</Select>
	<span class='input-group-addon'><i class='fa fa-list'></i></span>
	</div>
</div>	


<!--<div class='col-md-5 col-xs-6 '>
      <label for='title' >Title</label>
	   
	<input type = 'text' name = 'title' placeholder = 'Title' title= 'Please enter your title' required  class='form-control' >
	</div>-->
	
	<div class='col-md-5 col-xs-6";if ($fnameerror!=null) echo" has-error'";echo">
      <label for='fname' >First Name</label>
	  <div class='input-group'>
	<input type = 'text' name = 'fname' id='fname' placeholder = 'First Name' value='$fname' title= 'Please enter first name' required class='form-control' ></br>
	<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
	</div>
	<p class='errorsentence'>$fnameerror</p>
	
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	<div class='col-md-5 col-xs-6";if ($lnameerror!=null) echo" has-error'";echo">
      <label for='lname' >Last Name</label>
	  <div class='input-group'>
	<input type = 'text' name = 'lname' placeholder = 'Last Name' value='$lname' title= 'Please enter Last name' required class='form-control' > </br>
	<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
	</div>
	<p class='errorsentence'>$lnameerror</p>
	</div>

	
	<div class='col-md-5 col-xs-6";if ($doberror!=null) echo" has-error'";echo">
      <label for='dob' >Date of Birth</label>
	  <div class='input-group'>
	<input type = 'text' name = 'dob' id= 'dob' value='$dob' placeholder = 'mm/dd/yyyy'title= 'Please enter Date of Birth mm/dd/yyyy' required class='form-control'>
	<span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
	</div>
	<p class='errorsentence'>$doberror</p>
	</div>

	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
<div class='col-md-5 col-xs-6";if ($doberror!=null) echo" has-error'";echo">
      <label for='gender' >Gender</label></br>
	<input type = 'radio' name = 'gender' id='gendermale' value = 'Male'  "; if ($gender=="Male")echo"checked"; echo"> Male 
	<input type = 'radio' name = 'gender' id='genderfemale' value = 'Female' "; if ($gender=="Female")echo"checked"; echo"> Female </br>
	</div>
		
	
	<div class='form-group' style='text-align:center'>
      <div class='col-lg-10 col-lg-offset-2'>
        <button type='reset' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span> Cancel</button>
        <button type='submit' name='submit' class='btn btn-primary' ><span class='glyphicon glyphicon-send'></span> Submit</button>
      </div>
    </div>
	
	</fieldset>
	<div class='progress progress-striped active'>
  <div class='progress-bar' style='width: 100%' ></div>
</div>
	</form>
	
		<!--Panel close-->
	 </div>
</div>

	
 

";

	//print_r ($_SESSION);
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



</div>
</div><!--Display Area closed-->
<?php include 'footer.php';?>
</body>
</html>
