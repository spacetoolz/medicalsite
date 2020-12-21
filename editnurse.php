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
                
<div id="displayarea" class="row">								
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
		
		$offset=$_SESSION['offsetDoctor'];

		$limit=1;
		$userId=2;
		if(isset($_SESSION["staffId"])&&($_SESSION["userType"])){$userId=$_SESSION["staffId"];}
		
		//$query_sel = "SELECT  patientId,Title,lastName, firstName , dateOfBirth, gender , streetAddress, addressLine2, city, country, email, homePhone, workPhone, cellPhone, height, weight, age, allergy, bloodType,bmi,dateadded FROM Patient  LIMIT $limit OFFSET $offset";
			$query_selectdoctor = "SELECT nurseId,`lastName`, `firstName`, `city`, `country`, `email`, `workPhone`, `workPhone`, `cellPhone`, `qualification`, `photolocation`,profileInfo FROM `medical`.`nurse2`  WHERE nurseId=$userId";
			
			//mysqli_query($con, $query_sel);
			mysqli_query($con, $query_selectdoctor);
			
			//$result = $con->query($query_sel);
			$result = $con->query($query_selectdoctor);
			
			if(isset($_POST['next']))
			{
				$_SESSION['offsetDoctor']=$_SESSION['offsetDoctor']+1;		
				echo"$offset";
				//$offset=$offset+ $limit;
				
				echo "<script> location.href = 'doctors.php'</script> " ;
				
			}
	
			if(isset($_POST['previous']))
					{
						if($_SESSION['offsetDoctor']>=1){
			$_SESSION['offsetDoctor']=$_SESSION['offsetDoctor']-1;		
			echo"$offset";
			//$offset=$offset+ $limit;
			echo "<script> location.href = 'doctors.php'</script> " ;
						
				}
	}
	//}
			
			
	
}
	echo "<h1> Edit nurse</h1><br>";

if ($result->num_rows > 0) {
	echo "
	
	<!--<form method='POST' action=''>
<ul class='pager'>
  <li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>
  <li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
</ul>

</form>-->";
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		echo"<center>";
		
		
	
		$doctorId=$row['nurseId'];
		$firstName=$row['firstName'];
		$lastName=$row["lastName"];
		$fullName=$row['firstName']. " " . $row["lastName"];
		$city=$row["city"];
		$email=$row["email"];
		$workPhonePhone=$row["workPhone"];
		$workPhone=$row["workPhone"];
		$cellPhone=$row["cellPhone"] ;
		$photolocation=$row["photolocation"];
		$qualification=$row["qualification"];
		$profileInfo=$row["profileInfo"];
		
      /*  echo "  ". $row["firstName"]. " " . $row["lastName"] . " 
		" . $row["city"] . " 
		" . $row["email"] . "   
		
	
	

	 <br><br>  " . $row["workPhone"] . " " . $row["cellPhone"] . " " . $row["photolocation"] . " " . $row["qualification"] . " 
		
		
		
		 <br>";*/
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


echo"


<div class='container-fluid'>
  <form method='POST' action='update.php' enctype='multipart/form-data'>
  
  <div class='row' style='margin-left:5%; margin-right:5%;'>
    <div class='col-sm-5' style='background-color:white;'><img src='$photolocation' style='height:400px; width:400px;'/>
	<br>
	<br>
	
	<div class='col-md-5 col-xs-6' >
		  <label for='qualification' >Upload an image</label>
		 
	
	
	 <input type='file' name='fileToUpload' id='fileToUpload' value='$photolocation'>
	 	
		</div>	
	<br><br>
	<br><br><input  name='doctorId' type='hidden'  value='$doctorId'  />
	
	
	<h3>First Name: <input name='fname' type='text' class='form-control' value='$firstName'/>
	<br>Last Name:<input name='lname' type='text' class='form-control' value='$lastName'/> </h3>
	</div>
    <div class='col-sm-7' style='background-color:white;'>PROFILE INFO<br> <br>
	
	<!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
	-->
	<textarea rows='10%' cols='90%' name='profileInfo'>$profileInfo</textarea>
	<br>
	<br>
	<br>
	
	Doctor's Contact
	<br>
	<br>
	<br>
	<div class='row'>
	 <div class='col-sm-6'>
	 
	 Email:<input name='email' type='text' class='form-control' value='$email'/>
	 
	 <br>
	<br>
	<br>
	City:  <input name='city' type='text' class='form-control' value='$city'/>
	
	 <br>
	<br>
	<br>
	
	Qualification : 
	 <!--<input name='qualification' type='text' class='form-control' value='$qualification' readonly/>-->
	<select name='qualification'class='form-control'>
   
    <option value='$qualification'>$qualification</option>
    <option value='Bachelor of Medicine'>Bachelor of Medicine</option>
    <option value='Doctor of Medicine'>Doctor of Medicine</option>
    <option value='Doctor of Osteopathic Medicine'>Doctor of Osteopathic Medicine</option>
    <option value='Bachelor of Surgery'>Bachelor of Surgery</option>
	<option value='Doctor of Medicine by research'>Doctor of Medicine by research</option>
    <option value='Doctor of Philosophy'>Doctor of Philosophy</option>
    <option value='Master of Clinical Medicine'>Master of Clinical Medicine</option>
	<option value='Master of Medical Science'>Master of Medical Science</option>
    <option value='Master of Medicine'>Master of Medicine </option>
    <option value='Master of Philosophy'>Master of Philosophy </option>
	<option value='Master of Surgery'>Master of Surgery</option>
    <option value='Master of Science in Medicine or Surgery'>Master of Science in Medicine or Surgery</option>
    <option value='Doctor of Clinical Medicine'>Doctor of Clinical Medicine</option>
	<option value='Doctor of Clinical Surgery'>Doctor of Clinical Surgery</option>
	<option value='Doctor of Medical Science'>Doctor of Medical Science</option>
	<option value='Doctor of Surgery'>Doctor of Surgery</option>
   
  </select>  

<!-- <div class='col-md-5 col-xs-6'>
		  
		  <div class='input-group'>
			<select name='qualification'class='form-control'>
			
			<option value='Bachelor of Medicine'>Bachelor of Medicine</option>
			<option value='Doctor of Medicine'>Doctor of Medicine</option>
			<option value='Doctor of Osteopathic Medicine'>Doctor of Osteopathic Medicine</option>
			<option value='Bachelor of Surgery'>Bachelor of Surgery</option>
			<option value='Doctor of Medicine by research'>Doctor of Medicine by research</option>
			<option value='Doctor of Philosophy'>Doctor of Philosophy</option>
			<option value='Master of Clinical Medicine'>Master of Clinical Medicine</option>
			<option value='Master of Medical Science'>Master of Medical Science</option>
			<option value='Master of Medicine'>Master of Medicine </option>
			<option value='Master of Philosophy'>Master of Philosophy </option>
			<option value='Master of Surgery'>Master of Surgery</option>
			<option value='Master of Science in Medicine or Surgery'>Master of Science in Medicine or Surgery</option>
			<option value='Doctor of Clinical Medicine'>Doctor of Clinical Medicine</option>
			<option value='Doctor of Clinical Surgery'>Doctor of Clinical Surgery</option>
			<option value='Doctor of Medical Science'>Doctor of Medical Science</option>
			<option value='Doctor of Surgery'>Doctor of Surgery</option>
			</select>
		<span class='input-group-addon'><i class='fa fa-flag-checkered'></i></span>
		</div>
		</div>	-->
	 
	 
	 
	 
	 </div>
	 
	  <div class='col-sm-6'>
	  
	  Cell: <input name='cPhone' type='text' class='form-control' value='$cellPhone'/>
	  
	  <br>
	<br>
	<br>
	Work Phone: <input name='wPhone' type='text' class='form-control' value='$workPhone'/>
	 </div>
	 
	</div>
	</div>
  </div>
  <br>
	<br>
	<br>
  <button name='btn_updateNurse' class='btn btn-info' type='submit'>Update</button>
  </form>
  
</div>
";
?>

<!--<form method='POST' action=''>
<ul class='pager'>
  <li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>
  <li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
</ul>

</form>-->

</div><!-- #endregion displayarea End -->


	
		
<?php include 'footer.php';?>

</body>
</html>

