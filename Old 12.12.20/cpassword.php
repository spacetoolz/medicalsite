
<html>
	<head>
		<title></title>
		
	</head>
	<body style='background-color:#eeeaea'>
	
		<?php 
			
			$cpassword = $npassword = $cpassword = $dbpassword ="";
			
			//get the user ID 
			$idx=1;//$_GET['idx'];
		
		if (isset($_POST['btn_submit'])){ //if submit is pressed
			//include "login_validation.php";
			//connection to DB
			$errors = array();
			$con = mysqli_connect ("localhost","root","","medical"); //connect to database
			
			if(mysqli_error($con)) //if there is a error with database
			{
				die("There was an error in connecting to database");
			}else{
			//sql for selecting password
				$sql = "SELECT password FROM privilege WHERE userId=$idx";
				
				$records = mysqli_query($con,$sql);
				
				$row = mysqli_fetch_row($records);
				
				$opassword = md5($_POST['opassword']);
				
				$cpassword = $_POST['cpassword'];
				
				$dbpassword = $row[0];
				
				//print_r ($row);
				//echo "<br>";
				//print_r ($opassword);
				
				if(mysqli_error($con)){
					
					die("There was an error in connecting to database");
					
				}else{
					
					if (empty ($_POST['opassword'])){
						$errors['pswrd'] = "*Enter your current password*";
						
					}else{
						
						if (strcmp($opassword,$dbpassword)==0){//strcasecmp(string($opassword),string($dbpassword))==0){
							
							//echo "YOU ARE HERE!";
							if (empty ($_POST['npassword']) ){
								$errors['pswrd'] = "*Enter your new password*";
							}else{
								$npassword =$_POST['npassword'];
							}
							
							if (empty ($_POST['cpassword']) ){
								$errors['pswrd'] = "*Enter your new password*";
							}else{
								$npassword =$_POST['cpassword'];
							}
							
				 
							if (count($errors)==0 ){
								
								if (strcmp ($npassword,$cpassword)==0){
								
									$npassword = md5($cpassword);
									
									$SqlUpdate = "UPDATE privilege SET password='$npassword' WHERE userId='$idx'";
									
									mysqli_query($con,$SqlUpdate);

								}else{
									$errors['pswrd'] = "*Password did not match*";
								}
							
							}else{
								 $errors['pswrd'] = "*Invalid password*";
							}
							
						}else{
							$errors['pswrd'] = "*Invalid password*";
						}
						
					}
					
					
				}
			}
			
			mysqli_close($con);
			
		}
		
		echo"
			
			<form id='form1' action='' method='POST'>
				<div style='width: 60%; margin: 0px auto;'>
				   <br />
				   <div style='width: 468px; height: 459px; margin: 150px auto 0px auto;' >
					   
					   <div class='panel panel-default'style='height: 570px; width: 400px; margin-left: 38px; margin-top: 33px'>	<br />
							<div class='panel-heading'>
								<center><h2>Change your password <b>!</b></h2></center>
							</div>
								
							<div class='panel-body'>
								<div class='form-group'>
									<center><span class='error'>"; if((isset($errors)) && (count($errors)==0)){
										echo"
										<div class='alert alert-dismissible alert-success'>
											<button type='button' class='close' data-dismiss='alert'>&times;</button>
											<strong>Password has been changed.</strong>
										</div>";
									}else if (isset($errors)){
										echo"
										<div class='alert alert-dismissible alert-danger'>
											<button type='button' class='close' data-dismiss='alert'>&times;</button>
											<strong>Oh snap!</strong> "; echo $errors['pswrd']; echo "
										</div>"; 
										}
									echo "</span></center>
								</div>
								<div class='form-group'>
									<label class='control-label' for='inputDefault'>Current Password</label>
									<input type='password' class='form-control input-lg' id='Text1' name='opassword'/>
								</div>
					   
								<div class='form-group'>
									<label class='control-label' for='inputDefault'>New Password</label>
									<input type='password' class='form-control input-lg' id='inputDefault' name='npassword'/>
								</div>
								
								<div class='form-group'>
									<label class='control-label' for='inputDefault'>Confirm Password</label>
									<input type='password' class='form-control input-lg' id='inputDefault' name='cpassword'/>
								</div>
								
								<div class='form-group'>
									<div  style='width: 198px; height: 57px; margin-left: 120px; margin-top: 9px padding:0px 0px 0px 0px'>
										<button name='btn_submit' class='btn btn-success btn-md' type='submit'> Change </button>
									</div>
								</div>
								
								<div class='form-group'>
									<div style='width: 411px; margin-left: 0px; margin-top: 16px; height: 17px;'>
									   <!--<p style='padding:0px 0px 0px 80px';>Do not have a account? <a href='#'>Click Here</a></p -->
									   <a style='padding:0px 0px 0px 127px' href='index.php'>Back to Main Menu</a>
									   
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
		/* //color: red; */
	}
	</style>
    
</html>
