
<html>
	<head>
		<title></title>
		<style>
		body{

	background-color:grey;
	background-image: url("http://marketingland.com/wp-content/ml-loads/2016/01/stethoscope-healthy-keyboard-ss-1920.jpg") ;
	background-size: 100% 100%;
	opacity:.93;
	background-size:100% 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
}</style>
	</head>
	<body style='background-color:#eeeaea'>
	
		<?php 
		session_start();
			include "login_validation.php";
			//$_SESSION['userName']="";
		//echo $_SESSION['userName'];
		echo"
			
			<form id='form1' action='' method='POST'>
				<div style='width: 60%; margin: 0px auto;'>
				   <br />
				   <div style='width: 468px; height: 459px; margin: 150px auto 0px auto;' >
					   
					   <div class='panel panel-default'style='height: 450px; width: 400px; margin-left: 38px; margin-top: 33px'>	<br />
							<div class='panel-heading'>
								<center><h2>Welcome, Enter Login Info!</h2></center>
							</div>
								
							<div class='panel-body'>
								<div class='form-group'>
									<span class='error'>"; if (isset($errors['login'])) ECHO $errors['login']; echo "</span>  <br><br>
									<label class='control-label' for='inputDefault'>Username</label>
									<input type='text' class='form-control input-lg' id='Text1' name='username'/>
						   
								</div>
					   
								<div class='form-group'>
									<label class='control-label' for='inputDefault'>Password</label>
									<input type='password' class='form-control input-lg' id='inputDefault' name='password'/><br>
								</div>
								
								<div class='form-group'>
									<div  style='width: 198px; height: 57px; margin-left: 120px; margin-top: 9px padding:0px 0px 0px 0px'>
										<button name='btn_submit' class='btn btn-success btn-md' type='submit'> Login </button>
									</div>
								</div>
								
								<div class='form-group'>
									<div style='width: 411px; margin-left: 0px; margin-top: 16px; height: 17px;'>
									   <!--<p style='padding:0px 0px 0px 80px';>Do not have a account? <a href='#'>Click Here</a></p -->
									   <p style='padding:0px 0px 0px 127px';><a href='index.php'>Back to Main Menu</a></p>
									   
									</div>
								</div>
							</div>
						</div>
						   
					</div>
				</div>      
			</form>
		";
		?>

	</body>
	<link href="Css/bootstrap.min.css" rel="stylesheet" />
	<style>
		.btn-md{
			width:135px;
		}
		.error{
		color: #ff3333;
	}
	</style>
    
</html>
