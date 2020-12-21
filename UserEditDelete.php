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

<h1>Users</h1>

<?php
	

	$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
	$sqlShow = "SELECT * FROM privilege ";	 
	//$sqlShow = "SELECT * FROM privilege LIMIT 1 OFFSET $offset";	
	//$sqlShow = "SELECT * FROM privilege";	
			//check if error to connect to database
	if(mysqli_error($con))
	{
		die("There was an error in connecting to database");
	}else{
		
		$records = mysqli_query($con,$sqlShow);
			
		//$row = mysqli_fetch_array($records);
	
	
		//echo"<center>";	
		echo"<div style='width:100%; margin-left:auto; margin-right:auto;'><form action='' method='POST'><fieldset><table style='width:100%' styles='border:3px solid black'>
				 <tr class='info'>
					<th>ID</th>
					<th>First Name</th> 
					<th>Last Name</th> 
					<th>Username</th> 
					<th>Password</th> 
					<th>Email</th> 
					<th>Account Type</th> 
					<th>Staff ID</th> 
					<th style='width:230px'>Actions</th> 
		 
		   </tr>";
		
    //while($row = $result->fetch_assoc()) {
		if ($records->num_rows > 0) {
		while ($row = mysqli_fetch_array($records)){
			//$rows = mysqli_fetch_row($records);
			echo "<tr> 
					<td><input class='form-control input' type='number' name='userid' placeholder='Jane' value='".$row['userId']."' readonly></td> 
					
					<td>
						<input class='form-control input' type='text' name='fname' placeholder='Jane' value='".$row['fname']."' title='Please enter firstname'>";
						echo "<span class='error'>"; if (isset($errors['fname1'])) ECHO $errors['fname1']; echo "</span>
					</td> 
					
					<td>
						<input class='form-control input' type='text' name='lname' placeholder='Doe' value='".$row['lname']."' title='Please Enter Lastname' >
					</td>
					
					<td>
						<input class='form-control input' type='text' name='usrname' placeholder='jdoe' value='".$row['userName']."' title='E.g. John Smith -> jsmith'>
					</td>
					
					<td>
						<input class='form-control input' type='text' name='pswrd' placeholder='Jane' value='".$row['password']."'>
					</td> 
					
					<td>
						<input class='form-control input' type='email' name='usrEmail' placeholder='someone@domain.com' value='".$row['email']."' title='User email address goes here'>
					</td> 
					
					<td>
						<select name = 'type' class='form-control input'>
							<option value = 'Doctor'";if ($row['userType']=="Doctor")echo "selected";echo">Doctor</option>
							<option value = 'Nurse'";if ($row['userType']=="Nurse")echo "selected";echo">Nurse</option>
							<option value = 'Administrator'";if ($row['userType']=="Administrator")echo "selected";echo">Administrator</option>
						</select>
					</td> 
					
					<td><input class='form-control input' type='number' name='staffId' placeholder='5014' value='".$row['staffId']."' title='Staff ID address goes here'></td> 
					
					<td style='width:230px'>
						<a href='edituser?idx=".$row['userId']."' class='btn btn-info'> Edit </a>
						<a href='delete.php?did=".$row['userId']."' class='btn btn-danger btn-md'> Delete </a>
						<!-- <button name='btn_submit' class='btn btn-md' type='submit'> Edit </button> 
						<button name='btn_delete' class='btn btn-danger btn-md' type='submit' onclick='DeleteData(".$row['userId'].")'> Delete </button>
						<button name='btn_delete' class='btn btn-danger btn-md' type='submit' onclick='DeleteData(".$row['userId'].")'> Delete </button>-->
					</td> 
					
				</tr>  
				";
				//$userid = $row['userId']; 
				
		}
		}else{
			echo "<br> 0 results";
		}
	
	}
	//closing table and forms
	echo"</table></fieldset></form>
		";
	
	//echo"</center>";
		mysqli_close($con);
	
	?>
</div><!-- #endregion displayarea End -->
<?php include 'footer.php';

?>
</body>
	<script language="javascript">
		function DeleteData(userid){
			if (confirm ("Are you sure you would like to delete this record?")){
				window.location.href='delete.php/?did='+ userid +'';
				return true;
			}
		}
	</script>

	<link href="Css/bootstrap.min.css" rel="stylesheet" />
	
	<style>
		.btn-md, .btn-info{
			width:105px;
		}
		th {
			height: 50px;
			text-align: center;
		}
		td {
			height: 50px;
			/* //vertical-align: bottom; */
			padding-left:3px;
			padding-right:3px;
		}
		input[type=number] {
			width: 75px;
			text-align: center;
		}

		table, th, td {
		   border-bottom: 2px solid black;
		   
		}
	</style>




	
		



</html>