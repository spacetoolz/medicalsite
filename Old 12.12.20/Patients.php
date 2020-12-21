<!DOCTYPE html>
<html>
<head>
<title>Patients</title>
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
							
<?php
session_start();	//start or continue session
 include 'navbar.php';?>

<h1> Patients</h1>

<?php
echo "Session " .$_SESSION['offset']."<br> 

<script>
function myFunction() {
    var x = document.getElementById('next');
    x.style.fontSize = '25px'; 
    x.style.color = 'red'; 
	x.style.display='none';
}
</script>


";

	//session_start();
	//if (isset())		//if the submit button is pressed then do stuff below
//{
	//$name = $_SESSION['name'];
	//$status = $_SESSION['status'];
	/*
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
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
	
	$height =$_SESSION['height'] ;
	$weight =$_SESSION['weight'] ;
	$age =$_SESSION['age'] ;
	$allergies = $_SESSION['allergies'] ;
	$bloodType = $_SESSION['bloodType'] ;
	$bmi=$_SESSION['bmi'] ;
	$bmiclass=$_SESSION['bmiclass'] ;
	*/

		
		
		
		
				
		
	//connect to database
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{ 
		
		$offset=$_SESSION['offset'];

		$limit=10;
		
		$query_sel = "SELECT  patientId,Title,lastName, firstName , dateOfBirth, gender , streetAddress, addressLine2, city, country, email, homePhone, workPhone, cellPhone, height, weight, age, allergy, bloodType,bmi,dateadded FROM Patient order by patientId desc  LIMIT $limit OFFSET $offset";
		$query_selailment = "SELECT * FROM `ailment`";
		
				
			mysqli_query($con, $query_sel);
			mysqli_query($con, $query_selailment);
			
			$result = $con->query($query_sel);
			$resultailment = $con->query($query_selailment);
			
			if(isset($_POST['next']))
			{
				$_SESSION['offset']=$_SESSION['offset']+10;		
				echo"$offset";
				//$offset=$offset+ $limit;
				//header('Location:patients.php');	
				 echo "<script> location.href = 'patients.php'
				</script> " ;
			}
	echo "no of rows".$result->num_rows;
	if(isset($_POST['previous']))
			{
				if($_SESSION['offset']>=10){
	$_SESSION['offset']=$_SESSION['offset']-10;		
	echo"$offset";
	//$offset=$offset+ $limit;
	echo "<script> location.href = 'patients.php'
				</script> " ;}
	}
	
			if(isset($_POST['search']))
			{
				$_SESSION['offset']=0;
				$lname=$_POST['lname'];
				$query_sel = "SELECT  patientId,Title,lastName, firstName , dateOfBirth, gender , streetAddress, addressLine2, city, country, email, homePhone, workPhone, cellPhone, height, weight, age, allergy, bloodType,bmi,dateadded FROM Patient where lastName='$lname' ";
				mysqli_query($con, $query_sel);
			
				$result = $con->query($query_sel);
			
			}
	
	
	//}
			
			
	
}
	echo "test";

if ($result->num_rows > 0) {
	echo "<form method='POST' action='Patients.php'>
<ul class='pager'>
  <!--<li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>-->
  <li><button class='btn btn-default' type='submit' name='previous' id='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next' id='next'>Next</button></li>
</ul>

</form>";

		echo "
		
		<ul class='nav nav-tabs'>
  <li class='active'><a href='#home' data-toggle='tab' aria-expanded='false'>Patient Data</a></li>
  <li class=''><a href='#profile' data-toggle='tab' aria-expanded='true'>Ailments</a></li>
  
</ul>
<div id='myTabContent' class='tab-content'>
  <div class='tab-pane fade active in' id='home'>
    Patient Info

		
		
		
		<form method='POST' action='Patients.php'>
		
		
	<div class='col-md-5 col-xs-6'>
      <label for='lname' >Last Name</label>
	  <div class='input-group'>
	<input type = 'text' name = 'lname' placeholder = 'Last Name' value='' title= 'Please enter Last name' required class='form-control' > </br>
	<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
	</div>
	<button class='btn' type='submit' name='search' onclick='myFunction()'>search</button>
	</div>
		</form>
		
		
	</div><!--Last Line Tab--->
	
	
	
  <div class='tab-pane fade ' id='profile'>
    Ailments
	
	
	
	</div>
  
</div>
		
";

	
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		echo"<center>";
		
	
		
		echo" <table style='width:100%' class='table table-striped table-hover table-bordered' >
	 <tr class='info'>
    <th>ID</th>
    <th>Title</th> 
    <th>First Name</th> 
    <th>Last Name</th> 
    <th>DOB</th> 
    <th>Gender</th> 
    <th>Street Address</th> 
    <th>Address Line2</th> 
    <th>City</th> 
    <th>Country</th> 
    
    
   
   </tr>
  <tr>
    <!--<tr> <td>test  </td> <td>test  </td><td>test  </td></tr>-->";
		/*$val=$row['firstName'];
        echo "<tr> <td>". $row["patientId"]. "</td> <td> ". $row["firstName"]. "</td> <td>" . $row["lastName"] . "</td>  <td>" . $row["dateOfBirth"] . "</td> <td>" . $row["gender"] . "</td>  
		<td>" . $row["streetAddress"] . "</td> <td>" . $row["addressLine2"] . "</td> <td>" . $row["city"] . "</td> <td>" . $row["country"] . "</td> 
		<td>" . $row["email"] . "</td> </td></tr>  
		
	<tr class='info'> 
    <th>Home Phone Name</th>  <th>Work Phone</th> 
    <th>Cell Phone</th> 
    <th>Height</th> 
    <th>Weight</th> 
    <th>Age</th> 
    <th>Allergy</th> 
    <th>Blood Type</th> 
    <th>BMI</th> 
    <th>Date Added</th> 
	</tr>

	<tr> <br><br><td>" . $row["homePhone"] . " <td> " . $row["workPhone"] . "</td> <td>" . $row["cellPhone"] . "</td> 
		<td>" . $row["height"] . "</td> <td>" . $row["weight"] . "</td> <td>" . $row["age"] . "</td> <td>" . $row["allergy"] . "</td> 
		<td>" . $row["bloodType"] . "</td> <td>" . $row["bmi"] . "</td> <td>" . $row["dateadded"] . "</td>
		
		
		</tr>";  */

		echo "<form method='POST' action='update.php'><tr> <td>". $row["patientId"]. "</td> 
		<input name ='patientId'type='hidden' value='" . $row["patientId"]. "'class='form-control'/>
		<td><input name ='title'type='text' value='" . $row["Title"]. "'class='form-control'/></td> 
		<td><input name ='fname'type='text' value='" . $row["firstName"]. "'class='form-control'/></td> 
		<td><input name ='lname'type='text' value='" . $row["lastName"] . "'class='form-control'/></td>  
		<td><input name ='dob'type='date' value='" . $row["dateOfBirth"]. "'class='form-control'/></td> 
		<td><input name ='gender'type='text' value='" . $row["gender"] . "'class='form-control'/></td>  
		<td><input name ='sAddress'type='text' value='" . $row["streetAddress"] . "'class='form-control'/></td> 
		<td><input name ='address2'type='text' value='" . $row["addressLine2"] . "'class='form-control'/></td> 
		<td><input name ='city'type='text' value='" . $row["city"] . "'class='form-control'/></td> 
		<td><input name ='country'type='text' value='" . $row["country"] . "'class='form-control'/></td> 
		 </td></tr>  
		
		<tr class='info'> 
		<th>Email</th> 
		<th>Home Phone Name</th>  
		<th>Work Phone</th> 
		<th>Cell Phone</th> 
		<th>Height</th> 
		<th>Weight</th> 
		<th>Age</th> 
		<th>Allergy</th> 
		<th>Blood Type</th> 
		<th>BMI</th> 
		
		</tr>

		<tr> <br><br>
		<td><input name ='email'type='text' value='" . $row["email"] . "'class='form-control'/></td>
		<td><input name ='hPhone'type='text' value='" . $row["homePhone"] . "'class='form-control'/></td> 
		<td><input name ='wPhone'type='text' value='" . $row["workPhone"] . "'class='form-control'/></td> 
		<td><input name ='cPhone'type='text' value='" . $row["cellPhone"] . "'class='form-control'/></td> 
		<td><input name ='height'type='text' value='" . $row["height"] . "'class='form-control'/></td> 
		<td><input name ='weight'type='text' value='" . $row["weight"] . "'class='form-control'/></td> 
		<td><input name ='age'type='text' value='" . $row["age"] . "'class='form-control'/></td>
		<td><input name ='allergies'type='text' value='" . $row["allergy"] . "'class='form-control'/></td> 
		<td><input name ='bloodType'type='text' value='" . $row["bloodType"] . "'class='form-control'/></td> 
		<td><input name ='bmi'type='text' value='" . $row["bmi"] . "'class='form-control'/></td> 
		<!--<td>
		
		<input name =''type='text' value='" . $row["dateadded"] . "'class='form-control'/>
		
		
		</td>--> 
		</tr> <tr >
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><button name='btn_updatePatient' class='btn btn-info form-group' type='submit'>Update</button></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr></form>";
    }
		
	
	echo"</table>";
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
		
  mysqli_query($con, $query_sel);
   
		
	


	
		//echo "</br></br> <a href = \"form.php\">Go back to form</a>";
		mysqli_close($con);
		//header('Location: records.php');
	//}

?>

<form method='POST' action='Patients.php'>
<ul class='pager'>
  <!--<li><a href='#'>Previous</a></li>
  
  <li><a href='' name='next'>Next</a></li>-->
  <li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
  <li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
</ul>

</form>

</div><!-- #endregion displayarea End -->



	
		
<?php include 'footer.php';

//session_destroy();
?>

</body>
</html>