<html>
	<head>
	
	<title>Edit User</title>
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
		session_start();
		include 'navbar.php';
		$offset = $_SESSION['useroffset'];
		$count=0;
		
		if(isset($_POST['next']))
		{	
			//if($offset <= $count)
			$_SESSION['useroffset'] = $offset +1;
			//$row = mysqli_fetch_row($records);
		}

		if(isset($_POST['previous']))
		{
			if ($offset > 0)
			$_SESSION['useroffset'] = $offset -1;
			//$row = mysqli_fetch_row($records);
		}	
		
		$con = mysqli_connect("localhost", "root", "", "medical"); // host, username, password, database
		
		$sqlShow = "SELECT * FROM privilege LIMIT 1 OFFSET $offset";	
			
		#if (isset($_POST['btn_submit'])){
				
				//check if error to connect to database
			if(mysqli_error($con))
			{
				die("There was an error in connecting to database");
			}else{
				$records = mysqli_query($con,$sqlShow);
				
				$row = mysqli_fetch_array($records);
				
			if ($count == 0){
				while ($rows = mysqli_fetch_row($records)){
					$count++;
				}
			}
			
			
			//handle checks and write to database function
			include "edituser_validate.php";
			
			//while ($row = mysqli_fetch_array($records)){
			//while ($row = mysqli_fetch_row($records)){
	
				echo "
					<form  height=100% action='' method='POST' class='form-horizontal'>
						<fieldset style='padding:50px;'>
							
							<div class='form-group'>
								<div class='col-md-5 col-xs-5'>
								First name:<input class='form-control input-lg' type='text' name='fname' placeholder='Jane' value='".$row[1]."' title='Please enter firstname'>";
									echo "<span class='error'>"; if (isset($errors['fname1'])) ECHO $errors['fname1']; echo "</span>
								</div>
								<div class='col-md-5 col-xs-5'>
									Last name: <input class='form-control input-lg' type='text' name='lname' placeholder='Doe' value='".$row[2]."' title='Please Enter Lastname' >
									<span class='error'>"; if (isset($errors['lname1'])) ECHO $errors['lname1']; echo "</span>
									
								</div>
								
							</div>
							
							<div class='form-group'>
								<div class='col-md-5 col-xs-5'>
									Email:<input class='form-control input-lg' type='email' name='usrEmail' placeholder='someone@domain.com' value='".$row[5]."' title='User email address goes here'>
									<span class='error'>"; if (isset($errors['email1'])) ECHO $errors['email1']; echo "</span>
								</div>
								
								<div class='col-md-5 col-xs-5'>
									staff ID:<input class='form-control input-lg' type='number' name='staffId' placeholder='5014' value='".$row[7]."' title='Staff ID address goes here'>
									
								</div>
							</div>
							
							<div class='form-group'>
								<div class='col-md-5 col-xs-5'>
									User Name:<input class='form-control input-lg' type='text' name='usrname' placeholder='jdoe' value='".$row[3]."' title='E.g. John Smith -> jsmith'>
									<span class='error'>"; if (isset($errors['usrname'])) ECHO $errors['usrname']; echo "</span>
								</div>
								<div class='col-md-5 col-xs-5'>
									<input class='form-control input-lg' type='hidden' name='pswrd' placeholder='Jane' value='".$row['4']."'>
									<input class='form-control input-lg' type='hidden' name='userid' placeholder='Jane' value='".$row['0']."'>
								</div>
							</div>
							
							<div class='form-group'>
								<div class='col-md-2 col-xs-4'>
									type<select name = 'type' class='form-control input-lg'>
											<option value = 'Doctor'";if ($row[6]=="Doctor")echo "selected";echo">Doctor</option>
											<option value = 'Nurse'";if ($row[6]=="Nurse")echo "selected";echo">Nurse</option>
											<option value = 'Administrator'";if ($row[6]=="Administrator")echo "selected";echo">Administrator</option>
										</select>
								</div>
								<div class='col-md-2 col-xs-4'>
								</div>
							</div></br>
							<div class='form-group'>
								<div class='col-lg-5'>
									<button name='pervious' class='btn btn-info btn-md' type='submit'>Previous</button>
									<button name='next' class='btn btn-info btn-md' type='submit'> Next </button>
									<button name='btn_submit' class='btn btn-success btn-md' type='submit'> Update </button>
									</br></br>
								</div>
							</div>
							
						</fieldset>
					</form>
				";
			//}
				
			
		}
		?>
		
		</div><!-- #endregion displayarea End -->
		<?php include 'footer.php';?>
	</body>
	
	<link href="Css/bootstrap.min.css" rel="stylesheet" />
	<style>
		.btn-md{
			width:135px;
		}
	</style>

</html>
