<html>
	<head>
		
		
		
		
		
		
		
<title>Add User</title>
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
	
	<?php ?>
								



	
		<?php
			session_start();
			include 'navbar.php';
			$_SESSION['useroffset'] = 0;
			
			include "user_validate.php";
			
			echo "<h1> Add User</h1>
				<form  height=100% action='' method='POST' class='form-horizontal'>
					<fieldset style='padding:50px;'>
						
						<div class='form-group'>
							<div class='col-md-5 col-xs-5'>
								First name:<input class='form-control input-lg' type='text' name='fname' placeholder='Jane' value='' title='Please enter firstname'>
								<span class='error'>"; if (isset($errors['fname1'])) ECHO $errors['fname1']; echo "</span>
							</div>
							<div class='col-md-5 col-xs-5'>
								Last name: <input class='form-control input-lg' type='text' name='lname' placeholder='Doe' value='' title='Please Enter Lastname' >
								<span class='error'>"; if (isset($errors['lname1'])) ECHO $errors['lname1']; echo "</span>
								
							</div>
							
						</div>
						
						<div class='form-group'>
							<div class='col-md-5 col-xs-5'>
								Email:<input class='form-control input-lg' type='email' name='usrEmail' placeholder='someone@domain.com' value='' title='User email address goes here'>
								<span class='error'>"; if (isset($errors['email1'])) ECHO $errors['email1']; echo "</span>
							</div>
							
							<div class='col-md-5 col-xs-5'>
								staff ID:<input class='form-control input-lg' type='number' name='staffId' placeholder='5014' value='' title='Staff ID address goes here'>
								
							</div>
						</div>
						
						<div class='form-group'>
							<div class='col-md-5 col-xs-5'>
								User Name:<input class='form-control input-lg' type='text' name='usrname' placeholder='jdoe' value='' title='E.g. John Smith -> jsmith'>
								<span class='error'>"; if (isset($errors['usrname'])) ECHO $errors['usrname']; echo "</span>
							</div>
							<div class='col-md-5 col-xs-5'>
								Password:<input class='form-control input-lg' type='text' name='pswrd' placeholder='Jane' value='"; echo 'Default1@3'; echo"' title='default password for each user' readonly>
								
							</div>
						</div>
						
						<div class='form-group'>
							<div class='col-md-2 col-xs-4'>
								type<select name = 'type' class='form-control input-lg'>
										<option value = 'Doctor'>Doctor</option>
										<option value = 'Nurse'>Nurse</option>
										<option value = 'Administrator'>Administrator</option>
									</select>
							</div>
							<div class='col-md-2 col-xs-4'>
							</div>
						</div>
						
						<div class='form-group'>
							<div class='col-lg-5'>
								<button name='btn_submit' class='btn btn-success' type='submit'> Submit </button>
								</br></br>
							</div>
						</div>
					</fieldset>
				</form>
				
				
			";
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
