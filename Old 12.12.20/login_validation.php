<?php
	
	$errors = array();
	if (isset($_POST['btn_submit'])){
		//sql connection
		$username=$_POST["username"];
		$password=md5($_POST["password"]);
		
		
		
		$con = mysqli_connect("localhost", "root", "", "medical");
		//$sql = "SELECT * FROM privilege WHERE userName='".$username."' and password = '".$password."'";
		$sql = "SELECT * FROM privilege WHERE userName='$username' and password = '$password'";
		
		if (mysqli_error($con)){ // checking if connection is active
			
			die("something went wrong");
			
		}else{
			
			if((!empty($_POST["username"])) && (!empty($_POST["password"]))) {
				
				$result = mysqli_query($con,$sql);
				$row  = mysqli_fetch_array($result);
				
				if (!($_POST['username'] == $row[3]) && !(md5($_POST['password']) == $row[4])){
					
					$errors['login']= "Invalid Username or Password!";
					
					//echo $row[3];
					
					
				}
					
				if(is_array($row)) {
					
					$_SESSION["Username"] = $row['userName'];
					$_SESSION["firstname"] = $row['fname'];
					$_SESSION["lastname"] =  $row['lname'];
					$_SESSION["useremail"] =  $row['email'];
					$_SESSION["userType"] =  $row['userType'];
					$_SESSION["staffId"] = $row['staffId'];
					$_SESSION["userpassword"] = $row['password'];
					
					echo "complete";
					
					$_SESSION['lname'] = "";	//set the last name to a session
					$_SESSION['fname'] = "";	//set the first name to a session
					$_SESSION['title'] = "";	// set title to session
					//$_SESSION['dob'] = $dob;	// set dob to session
					$_SESSION['dob'] = "";	// set dob to session
					$_SESSION['gender'] = "";
					$_SESSION['offsetDoctor'] = 0;
					$_SESSION['offsetViewDoctor'] = 0;
					
					
					header('Location:index.php');
					
				}
			} else {
				$errors['login']= "Invalid Username or Password!";
			}
				
		}
	}
?>