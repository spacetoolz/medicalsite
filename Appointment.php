<html>
<head>

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











<style>
form{
	border: 3px grey solid ;
}

</style>

</head>
<body>

<div id="displayarea" class="row">	
<?php 
session_start();	//start or continue session
 include 'navbar.php';
	
	
	//connect to database
	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	
	//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}
	else
	{
		$query_selectdoctor = "SELECT LastName,firstName FROM doctor2 order by lastname desc";
		$query_selpatient = "SELECT LastName,firstName FROM patient order by lastname desc";
		$query_selectAppointment = "SELECT * FROM `appointment`order by appId desc LIMIT 3";
		
		if(isset($_POST['btn_submit']))
		{
		
		$patient=$_POST['patient'];
		$doctor=$_POST['doctor'];
		$appDate=$_POST['appDate'];
		$appTime=$_POST['appTime'];
		$comment=$_POST['comment'];
		echo $appDate;
		$query_insAppointment = "INSERT INTO appointment (appId, patientName, appDate, appTime, doctorName, Comments) VALUES (NULL, '$patient', '$appDate', '$appTime', '$doctor', '$comment')";
		mysqli_query($con, $query_insAppointment);
		}
		$display_doctor=mysqli_query($con, $query_selectdoctor);
			
		
			$display_patient=mysqli_query($con, $query_selpatient);
			$display_Appointment=mysqli_query($con, $query_selectAppointment);
			
			
		
		
		//$_session['value']=mysqli_insert_id($con);
		$newPatientId=mysqli_insert_id($con);
			
			
  
   
	
		mysqli_close($con);
		//header('Location: records.php');
		//}
	
	
	
	
	
		echo "
	<div class='row container'>
	<h1>Appointment</h1>
			<div class='form-layout col-xs-5'>
				
				<div name='panel-body'>
				
					<div class='appointment_form_layout'>
						<div name='panel-heading'>
						</div>
						<div class='panel-body'>
						<form method ='post'>
							<fieldset>

								<div class='form-group'>
									<div class='smart-green'>
										<center><h3>New Appointment</h3></center>
									</div>
								</div>
								<div class='form-group'>
									<div class='col-xs-10'>
										<label class='control-label'>Patient</label><br>
										<select class='form-control input-md' name='patient'>";
										//mysql_connect('localhost', 'admin', '');
										//mysql_select_db('database-name');
											while($rows = mysqli_fetch_row($display_patient))
													{
														echo "<option>".$rows[0].", ".$rows[1]."</option> </br>";
													}
									
										
										echo"
										</select><br>
									</div>
								</div>
								
								<div class='form-group'>
									<div class='col-xs-10'>
										<label class='control-label' >Doctor</label><br>
										<select class='form-control input-md' name='doctor'>";
										
										while($rows = mysqli_fetch_row($display_doctor))
													{
														echo "<option>".$rows[0].", ".$rows[1]."</option> </br>";
													}
									
										echo"
										</select><br>
									</div>
								</div>
								
								<div class='form-group'>
									<div class='col-xs-5'>
										<label class='control-label'>Date</label><br>
										<input type='date' class='form-control input-md' pleaceholder='DD-MM-YYYY' name='appDate'/>
									</div>
									<div class='col-xs-5'>
									<label class='control-label'>Time</label>
										<label class='control-label'>&nbsp;</label><br>
										<input type='time' class='form-control input-md' pleaceholder='10:00' name='appTime'/></br>
									</div>
									<br>
								</div>

								<div class='form-group'>
									<div name='comment' class='col-xs-10'>
										<label class='control-label' for='comment'>Comments/Questions? (optional)</label><br>
										<textarea rows='5' cols='35' name='comment'></textarea></br></br></br>
									</div>
								</div>
								
								<div class='form-group'>
									<div class='col-xs-10'>
										<button type='reset' class='btn btn-default'>Cancel</button>
										<button name='btn_submit' class='btn btn-info' type='submit'> Submit </button>
										</br></br>
									</div>
								</div>



							</fieldset>
						</form>
					</div>
				</div>
				
			</div>
			
			
	
		</div>
		
		
		<div class='col-xs-7'><!-- right column -->
		<form method='POST' action='update.php'>	
			<table  class='table table-striped table-hover table-bordered' >
	 <tr >
    <th>ID</th>
    <th>Patient Name</th> 
	<th>App Date</th> 
    <th>Time</th> 
    <th>Doctor</th> 
    <th>Comments</th> 
   <!--<th>added date</th>--> 
    
    
   
   </tr>";
										
											while($rows = mysqli_fetch_row($display_Appointment))
													{
														echo "<tr> <td>".$rows[0]."</td> <td>".$rows[1]."</td> <td> ".$rows[2]."</td> <td> ".$rows[3]."</td> <td> ".$rows[4]."</td> <td>".$rows[5]."</td></tr> ";
														echo "<form method='POST' action='update.php'><tr > <td > ".$rows[0]."<input name='id' value='".$rows[0]."'class='form-control' type ='hidden'/></td> 
														<td><input name='patient' type='text' value='".$rows[1]."'class='form-control'/> </td> 
														<td> <!--<input name='appDate'type='text' value='".$rows[2]."'class='form-control'/>-->
										
										<input type='date' class='form-control input-md' pleaceholder='DD-MM-YYYY' name='appDate'value='".$rows[2]."'/>
									</td> 
									<td> <!--<input name='appTime' type='text' value='".$rows[3]."'class='form-control'/>-->
									<input type='time' class='form-control input-md' pleaceholder='10:00' name='appTime'value='".$rows[3]."'/></td> 
									<td> <input name ='doctor'type='text' value='".$rows[4]."'class='form-control'/></td>
									<td><input name ='comment'type='text' value='".$rows[5]."'class='form-control'/> <button name='btn_updateAppointment' class='btn btn-info' type='submit'><!--<a href = update.php?id=".$rows[0].">Update</a>-->Update</button></td> </tr> </form>";
													
													}
									
										
										echo"
										</table>
										<br>
										
										
			
			
			</div>
	</div><!-- row End -->
	
	
	
	";
	
	
	}
	
	
?>
</div><!-- #endregion displayarea End -->
</body>





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




<br>
<?php include 'footer.php';

//session_destroy();
?>

</html>
