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

<h1> Edit User</h1>
	
		<?php

			include "edituser_validate.php";
			
			if ($_GET['idx'])
				$idx = $_GET['idx'];
			else
				$idx=0;
			$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
			
			//$sqlShow = "SELECT * FROM privilege LIMIT 1 OFFSET $offset";	
			$sql = "SELECT * FROM privilege WHERE userId='$idx'";	
			$records = mysqli_query($con,$sql);	
			$row = mysqli_fetch_row($records);

					
						echo "
							<div style='width:55%; margin: auto;'>";

						if((isset($errors)) && (count($errors)==0)){

							echo "
								<div class='alert alert-dismissible alert-success'>
									<button type='button' class='close' data-dismiss='alert'>&times;</button>
									<center><strong>Well done!</strong> You successfully Updated the Database.<center>
								</div>
							";

						}else if (isset($errors)){

							echo "
								<div class='alert alert-dismissible alert-danger'>
								 	<button type='button' class='close' data-dismiss='alert'>&times;</button>
								 	<center><strong>Oh snap!</strong> Change a few things up and try submitting again.<center>
								</div>
							";
						}

						echo"<form  height=100% action='' method='POST' class='form-horizontal'>
							<fieldset style='padding:50px;'>
								
								<div class='form-group'>
									<div class='col-md-5 col-xs-5'>
									ID:<input class='form-control input' type='text' name='userid' placeholder='Jane' value='".$row[0]."' title='System generated ID' readonly>
									</div>
								</div>

								<div class='form-group'>
									<div class='col-md-5 col-xs-5'>
									First name:<input class='form-control input' type='text' name='fname' placeholder='Jane' value='".$row[1]."' title='Please enter firstname'>";
										echo "<span class='error'>"; if (isset($errors['fname1'])) ECHO $errors['fname1']; echo "</span>
									</div>
									<div class='col-md-5 col-xs-5'>
										Last name: <input class='form-control input' type='text' name='lname' placeholder='Doe' value='".$row[2]."' title='Please Enter Lastname' >
										<span class='error'>"; if (isset($errors['lname1'])) ECHO $errors['lname1']; echo "</span>
										
									</div>
									
								</div>
								
								<div class='form-group'>
									<div class='col-md-5 col-xs-5'>
										Email:<input class='form-control input' type='email' name='usrEmail' placeholder='someone@domain.com' value='".$row[5]."' title='User email address goes here'>
										<span class='error'>"; if (isset($errors['email1'])) ECHO $errors['email1']; echo "</span>
									</div>
									
									<div class='col-md-5 col-xs-5'>
										staff ID:<input class='form-control input' type='number' name='staffId' placeholder='5014' value='".$row[7]."' title='Staff ID address goes here'>
										
									</div>
								</div>
								
								<div class='form-group'>
									<div class='col-md-5 col-xs-5'>
										User Name:<input class='form-control input' type='text' name='usrname' placeholder='jdoe' value='".$row[3]."' title='E.g. John Smith -> jsmith'>
										<span class='error'>"; if (isset($errors['usrname'])) ECHO $errors['usrname']; echo "</span>
									</div>
									<div class='col-md-5 col-xs-5'>
										<input class='form-control input' type='hidden' name='pswrd' placeholder='Jane' value='".$row['4']."'>
										
									</div>
								</div>
								
								<div class='form-group'>
									<div class='col-md-2 col-xs-4'>
										type<select name = 'type' class='form-control input'>
												<option value = 'Doctor'";if ($row[6]=="Doctor")echo "selected";echo">Doctor</option>
												<option value = 'Nurse'";if ($row[6]=="Nurse")echo "selected";echo">Nurse</option>
												<option value = 'Administrator'";if ($row[6]=="Administrator")echo "selected";echo">Administrator</option>
											</select>
									</div>
									<div class='col-md-2 col-xs-4'>
									</div>
								</div></br>
								<div class='form-group'>
									<div class='cot-5'>
										<a href='UserEditDelete.php' class='btn btn-info'> Back </a>
										<button name='btn_submit' class='btn btn-success btn-md' type='submit'> Update </button>
										</br></br>
									</div>
								</div>
								
							</fieldset>
						</form></div>
					";
				//}
					
				
		?>
		
	</div><!-- #endregion displayarea End -->
<?php include 'footer.php';

//session_destroy();
?>	
	</body>
	
	
	<style>
		.btn-md, .btn-info{
			width:135px;
		}
		input[name=userid] {
			width: 75px;
			text-align: center;
		}
		.error{
			color: #ff3333;
			//color: red;
		}

	</style>

</html>
