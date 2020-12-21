<!DOCTYPE html>
<html>
<head>
<title>Our Doctors</title>
<style>

</style>
<link rel="stylesheet" href="stylesheet\displayarea.css">

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
<link rel="manifest" href="fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
                
<div id="displayarea" class="row container-fluid">								
<?php session_start();	//start or continue session 
include 'navbar.php';?>
<?php


	//connect to database
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{ 
		
		$offset=$_SESSION['offsetViewDoctor'];

		$limit=6;
		
		//$query_sel = "SELECT  patientId,Title,lastName, firstName , dateOfBirth, gender , streetAddress, addressLine2, city, country, email, homePhone, workPhone, cellPhone, height, weight, age, allergy, bloodType,bmi,dateadded FROM Patient  LIMIT $limit OFFSET $offset";
			$query_selectdoctor = "SELECT `lastName`, `firstName`, `city`, `country`, `email`, `workPhone`, `workPhone`, `cellPhone`, `qualification`, `photolocation`,profileInfo FROM `medical`.`doctor2` order by doctorId desc LIMIT $limit OFFSET $offset";
			$query_selectdoctorAmount = "SELECT count(doctorId) as test FROM `medical`.`doctor2`  ";
			
			$amountOfDoctor=mysqli_query($con, $query_selectdoctorAmount);
			mysqli_query($con, $query_selectdoctor);
			
			//$result2 = $con->query($query_selectdoctorAmount);
			$result = $con->query($query_selectdoctor);
			$rows = mysqli_fetch_row($amountOfDoctor);
			if(isset($_POST['next']))
			{$docTotal=($rows[0]-1);echo $docTotal." </br>";
				if($_SESSION['offsetViewDoctor']<$docTotal){
						$_SESSION['offsetViewDoctor']=$_SESSION['offsetViewDoctor']+1;		
						//echo"$offset";
						//$offset=$offset+ $limit;
						
						echo "<script> location.href = 'doctors.php'</script> " ;
				}
			}
	
			if(isset($_POST['previous']))
					{
						if($_SESSION['offsetViewDoctor']>=1){
			$_SESSION['offsetViewDoctor']=$_SESSION['offsetViewDoctor']-1;		
			echo"$offset";
			//$offset=$offset+ $limit;
			echo "<script> location.href = 'doctors.php'</script> " ;
						
				}
	}
	//}
			
			
													
														
													
	//echo $amountOfDoctor;
}
	echo "<h1> Our Doctors</h1><br>";

if ($result->num_rows > 0) {
	echo "<form method='POST' action=''>
<ul class='pager'>
  <!--<li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>-->
  <li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
</ul>

</form>";
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		echo"<center>";
		
		
	
  
   
		$fullName=$row['firstName']. " " . $row["lastName"];
		$city=$row["city"];
		$email=$row["email"];
		$workPhonePhone=$row["workPhone"];
		$workPhone=$row["workPhone"];
		$cellPhone=$row["cellPhone"] ;
		$photolocation=$row["photolocation"];
		$qualification=$row["qualification"];
		$profileInfo=$row["profileInfo"];
		
      echo"


<div class='container-fluid'>
  
  
  <div class='row' style='margin-left:5%; margin-right:5%;'>
    <div class='col-sm-6' style='background-color:white;'><img src='$photolocation' style='height:400px; width:400px;'/>
	<br>
	<br>
	<h3>Dr. $fullName </h3>
	</div>
    <div class='col-sm-6' style='background-color:white; text-align:left;'>PROFILE INFO<br> <br>
	
	<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
	-->
	$profileInfo
	<br>
	<br>
	<br>
	
	Doctor's Contact
	<br>
	<br>
	<br>
	<div class='row'>
	 <div class='col-sm-6'>
	 
	 Email:$email
	 
	 <br>
	<br>
	<br>
	City  $city
	
	 <br>
	<br>
	<br>
	
	Qualification : $qualification
	 </div>
	 
	  <div class='col-sm-6'>
	  
	  Cell $cellPhone
	  
	  <br>
	<br>
	<br>
	Work Phone $workPhone
	 </div>
	 
	</div>
	</div>
  </div>
</div>

<br>
<br>
<br>
";
		 
		 
    }
	
	
	
	
	echo"</center>";
/*echo"
<form method='POST' action='Patients.php'>
<ul class='pager'>
  <!--<li><a href='#'>Previous</a></li>
  -->
  <li><a href='' name='next'>Next</a></li>
  <li><button class='btn' type='submit' name='Previous'>Previous</button></li>
  <li><button class='btn' type='submit' name='next'>Next</button></li>
</ul>

</form>";*/
}

 else {
    echo "<br> 0 results";
}
		
 // mysqli_query($con, $query_selectdoctor);
   
		
	


	
		//echo "</br></br> <a href = \"form.php\">Go back to form</a>";
		mysqli_close($con);
		//header('Location: records.php');
	//}


/*echo"


<div class='container-fluid'>
  
  
  <div class='row' style='margin-left:5%; margin-right:5%;'>
    <div class='col-sm-6' style='background-color:white;'><img src='$photolocation' style='height:400px; width:400px;'/>
	<br>
	<br>
	<h3>Dr. $fullName </h3>
	</div>
    <div class='col-sm-6' style='background-color:white;'>PROFILE INFO<br> <br>
	
	<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
	-->
	$profileInfo
	<br>
	<br>
	<br>
	
	Doctor's Contact
	<br>
	<br>
	<br>
	<div class='row'>
	 <div class='col-sm-6'>
	 
	 Email:$email
	 
	 <br>
	<br>
	<br>
	City  $city
	
	 <br>
	<br>
	<br>
	
	Qualification : $qualification
	 </div>
	 
	  <div class='col-sm-6'>
	  
	  Cell $cellPhone
	  
	  <br>
	<br>
	<br>
	Work Phone $workPhone
	 </div>
	 
	</div>
	</div>
  </div>
</div>
";*/
?>

<form method='POST' action=''>
<ul class='pager'>
  <!--<li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>-->
  <li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
</ul>

</form>

</div><!-- #endregion displayarea End -->

<!--BMI Calculator-->

	<div id='BMIModal' class='modal fade' role='dialog'>
	  <div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>
		  <div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span></button>
			<h4 class='modal-title'><i class="fa fa-calculator" aria-hidden="true"></i> BMI Calculator</h4>
		  </div>
		  <div class='modal-body'>
	

	<form>
	<table style='width:90%' class='table table-striped table-hover table-bordered' >
	  <tr class='info'>
		<!--<th>Fields</th>-->
		<th>User Input</th> 
	   </tr>
	  <tr>
		<!--<td>Weight</td>-->
		<td>
			<div class='input-group'>
				<input type = 'number' step='any' name = 'weight' id='weight' value='$weight' placeholder = 'Weight (kilograms)' title= 'Please enter your weight' required class='form-control col-md-5 col-xs-6'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-scale'></i></span>
			</div> 		
		</td>
	   </tr>
	  <tr>
		<!--<td>Height</td>-->
		<td>
		<label for='height' >Height</label>
		<div class='input-group'>
			<input type = 'number' step='any' name = 'height' id= 'height' value='$height' placeholder = 'Height (meters)' title= 'Please enter your height' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-paste'></i></span>
		</div>
		</td>
		
	  </tr>
	  <tr>
		<!--<td>BMI</td>-->
		<td><p id="bmi" value="5"></p></td>
	  </tr> 
	  <tr>
		<!--<td>BMI Class</td>-->
		<td><p id="bmiclass"></p></td>
	  </tr> 
	
	  
	</table>
	<button type='button' class='btn btn-default' name="submit" onclick="calculateBmi()"><i class="fa fa-calculator" aria-hidden="true"></i> Calculate BMI</button>
	</form>
	  
		  
			  
		  </div>
		  <div class='modal-footer'>
			<button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span> Close</button>
			
		  </div>
		</div>

		
	  </div>
	</div>

	
		
<?php include 'footer.php';?>

</body>
</html>

