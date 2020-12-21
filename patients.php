<html>

	<head>
		
	</head>

	<Body>
		<div id="displayarea" class="row">	
								
			<?php
				session_start();	//start or continue session
				include 'navbar.php';
			?>
			
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
					$query_selailment = "SELECT ailment.AID,ailment.PID,patient.Title,patient.lastName,patient.firstName,ailment.Name FROM ailment
INNER JOIN patient
ON patient.patientId=ailment.PID order by ailment.PID desc";
					
							
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
				echo "<!--Tabs-->
				<ul class='nav nav-tabs'>
					<li class='active'><a href='#Patients' data-toggle='tab'>Patients</a></li>
					<li><a href='#Ailments' data-toggle='tab'>Ailments</a></li>
					
				</ul>";

			if ($result->num_rows > 0) 
			{
				echo "<form method='POST' action='Patients.php'>
					<ul class='pager'>
						<!--<li><a href='#'>Previous</a></li>
					  
						<li><a href='' name='next'>Next</a></li>-->
						<li><button class='btn btn-default' type='submit' name='previous' id='previous'>Previous</button></li>
						<li><button class='btn btn-default' type='submit' name='next' id='next'>Next</button></li>
					</ul>

				</form>
		
				

				<div id='myTabContent' class='tab-content'><!--Patient's Tab-->
					<div class='tab-pane fade active in' id='Patients'>
					
						<form method='POST' action='Patients.php'>
			
							<div class='col-md-5 col-xs-6'>
								<label for='lname' >Last Name</label>
								
								<div class='input-group'>
									<input type = 'text' name = 'lname' placeholder = 'Last Name' value='' title= 'Please enter Last name' required class='form-control' > </br>
									<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									
								</div>
							</div>
								
							<div class='col-md-5 col-xs-6'>	
								<div class='input-group '>
									<br>
									<button class='btn' type='submit' name='search' onclick='myFunction()'>search</button>
								</div>
							
								<br><br><br><br>
							</div>
						</form>";
	
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
										echo "<form method='POST' action='update.php'>
											<tr> 
												<td>". $row["patientId"]. "</td> 
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
												</td>
											</tr>  
										
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

											<tr> 
												<br><br>
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

											</tr> 
											
											<tr >
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
											</tr>
											
										</form>";
							
							}
						
					
							echo"</table>";
						echo"</center>

			
						
					</form>
					
				</div>";
			}
				echo"
				<div class='tab-pane fade' id='Ailments'> <!--Ailments Tab-->";
								if ($resultailment->num_rows > 0) {
									
									echo"<!--<form method='POST' action='Patients.php'>
			
							<div class='col-md-5 col-xs-6'>
								<label for='lname' >Patient Name</label>
								
								<div class='input-group'>
									<input type = 'text' name = 'lname' placeholder = 'Last Name' value='' title= 'Please enter Last name' required class='form-control' > </br>
									<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
									
								</div>
							</div>
								
							<div class='col-md-5 col-xs-6'>	
								<div class='input-group '>
									<br>
									<button class='btn' type='submit' name='search' onclick='myFunction()'>search</button>
								</div>
							
								<br><br><br><br>
							</div>
						</form>-->";
									
									
									while($row = $resultailment->fetch_assoc()) {
								echo"<center>";
								
								echo" <table style='width:100%' class='table table-striped table-hover table-bordered' >
									<tr class='info'>
										<th>Ailment ID</th>
										<th>Patient ID</th>
										<th>Title</th> 
										<th>First Name</th> 
										<th>Last Name</th> 
										<th>Ailment</th> 
										<th>Action</th> 
										
									</tr>
									
									
									<tr>";
										
										echo "<form method='POST' action='update.php'>
											<tr> 
												<td>". $row["AID"]. "</td> 
												<input name ='ailmentId'type='hidden' value='" . $row["AID"] . "'class='form-control'/>
												<input name ='patientId'type='hidden' value='" . $row["PID"] . "'class='form-control'/>
												
												<td>" . $row["PID"]. "</td> 
												<td>" . $row["Title"] . "</td>  
												<td>" . $row["lastName"] . "</td>  
												<td>" . $row["lastName"] . "</td>  
												<td><input name ='ailmentName'type='text' value='" . $row["Name"] . "'class='form-control'/></td>  
												
												<td><button name='btn_updateAilment' class='btn btn-info form-group' type='submit'>Update</button>
												
												<tr>
												</form>
												</table>";
									}
								
									
									
									echo"</div>
				
				
				
				
			</div>
			
			
			<form method='POST' action='Patients.php'>
			
				<ul class='pager'>
					<li><button class='btn btn-default' type='submit' name='previous'>Previous</button></li>
					<li><button class='btn btn-default' type='submit' name='next'>Next</button></li>
				</ul>

			</form>

			</div><!-- #endregion displayarea End -->";

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

				
					
			<?php include 'footer.php';

			//session_destroy();
			?>
		</div>
	</body>
	
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	 <link rel="stylesheet" href="css/bootstrap.css"> 
	 <link rel="stylesheet" href="css/bootstrap-theme.css"> 
	 <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	 <script src="css/bootstrap.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>

	<link href="Css/bootstrap.min.css" rel="stylesheet" />

</html>