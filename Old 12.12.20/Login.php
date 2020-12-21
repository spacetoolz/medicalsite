
<html>
	<head>
		<title></title>
		<style>
		body{

	background-color:grey;
	//background-image: url("20170513_225520.jpg") ;
	//background-image: url("shutterstock_70352440.jpg") ;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfAmRmSFOqyo6DIO4zhtztF4JFZp6qIzMdPIY48pUM2bsmplffBg") ;
	//background-image: url("https://image.freepik.com/free-vector/abstract-blue-background_1048-1511.jpg") ;
	//background-image: url("https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAl6AAAAJDg2OTlkMzc3LTA5NzMtNDc1OS04MzYxLWMzMjM5MmIwYTg1Zg.jpg") ;
	//background-image: url("http://68.media.tumblr.com/98e3b9d0dca4d537b66659b6ae56de4c/tumblr_ny8br4hYc91tjkvvlo3_r1_1280.jpg") ;
	background-size: 100% 100%;
	opacity:.8;
	//background-repeat: no-repeat;
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
		//color: red;
	}
	</style>
    
</html>
