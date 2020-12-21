<html>

<head>



</head>


<body >

<div id="displayarea" class="row">
<?php
session_start();	//start or continue session
 include 'navbar.php';
 
 if (isset ($_SESSION['sess_err'])&&($_SESSION['sess_err']==1))	
{
	
	$_SESSION['sess_err'] = 0;				// 	reset the session flag to 0 so that the error doesn't loop
	//echo "There was an error!</br>";		//	display an error message
	//$name = $_SESSION['name'];			//	
	
	
	$lname= $_SESSION['lname'] ;	//set the last name to a session
	$fname= $_SESSION['fname'] ;	//set the first name to a session
	$title= $_SESSION['title'] ;	// set title to session
	$dob= $_SESSION['dob'] ;	// set dob to session
	$gender=$_SESSION['gender']  ;	// set gender to session
	
		$lnameerror=$_SESSION['lnameerror'];	//set the last name to a session
		$fnameerror=$_SESSION['fnameerror'];	//set the first name to a session
		$titleerror=$_SESSION['titleerror'];	// set title to session
		$doberror=$_SESSION['doberror'];	// set dob to session
		//$gendererror=$_SESSION['gendererror'];
		
		$streetAddress =$_SESSION['streetAddress'];
		$addressLine2 =	$_SESSION['addressLine2'];
		$city =	$_SESSION['city'];
		$country = $_SESSION['country'];
		$email = $_SESSION['email'];
		$hPhone = $_SESSION['hPhone'];
		$wPhone =$_SESSION['wPhone'];
		$cPhone =$_SESSION['cPhone'];
		
		
		
		$streetAddresserror=$_SESSION['streetAddresserror'];
		$addressLine2error=	$_SESSION['addressLine2error'];
		$cityerror=	$_SESSION['cityerror'];
		$countryerror= $_SESSION['countryerror'];
		$emailerror= $_SESSION['emailerror'];
		$hPhoneerror= $_SESSION['hPhoneerror'];
		$wPhoneerror=$_SESSION['wPhoneerror'];
		$cPhoneerror=$_SESSION['cPhoneerror'];
		$age1error=$_SESSION['age1error'];
		
	
}
else
{ 		
	
	$fname ="John";
	$lname ="Smith";
	$dob = "1995-2-4";
	$title="Mr";
	$gender="Male";
		
	
		$lnameerror="";	//set the last name to a session
		$fnameerror="";	//set the first name to a session
		$titleerror="";	// set title to session
		$doberror="";
		
		
		$streetAddress ="21 Jump Street";
		$addressLine2 ="Lot 602";
		$city ="Kingston";
		$country = "";
		$email = "ranikew@yahoo.com";
		$hPhone = "876-223-8812";
		$wPhone = "876-823-8812";
		$cPhone ="876-523-8812" ;
		
		
			$streetAddresserror="";
			$addressLine2error="";
			$cityerror="";
			$countryerror="";
			$emailerror="";
			$hPhoneerror="";
			$wPhoneerror="";
			$cPhoneerror="";
			//$age1error="";
}
 

 
 echo "
<h1>Add Nurse</h1>
<form class='form-horizontal'  action='nursevalidation.php' method='post' enctype='multipart/form-data'>


	
	
	
	
	<div class='col-md-5 col-xs-6";if ($fnameerror!=null) echo" has-error'";echo">
      <label for='fname' >First Name</label>
	  <div class='input-group'>
	<input type = 'text' name = 'fname' id='fname' placeholder = 'First Name' value='$fname' title= 'Please enter first name' required class='form-control' ></br>
	<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
	</div>
	<p class='errorsentence'>$fnameerror</p>
	
		</div>
		
		
		
	<div class='col-md-5 col-xs-6";if ($lnameerror!=null) echo" has-error'";echo">
      <label for='lname' >Last Name</label>
	  <div class='input-group'>
	<input type = 'text' name = 'lname' placeholder = 'Last Name' value='$lname' title= 'Please enter Last name' required class='form-control' > </br>
	<span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
	</div>
	<p class='errorsentence'>$lnameerror</p>
	</div>

	
	<div class='col-md-5 col-xs-6";if ($doberror!=null) echo" has-error'";echo">
      <label for='dob' >Date of Birth</label>
	  <div class='input-group'>
	<input type = 'text' name = 'dob' id= 'dob' value='$dob' placeholder = 'mm/dd/yyyy'title= 'Please enter Date of Birth mm/dd/yyyy' required class='form-control'>
	<span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
	</div>
	<p class='errorsentence'>$doberror</p>
	</div>

	
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
<div class='col-md-5 col-xs-6";if ($doberror!=null) echo" has-error'";echo">
      <label for='gender' >Gender</label></br>
	  
	<input type = 'radio' name = 'gender' id='gendermale' value = 'Male'  "; if ($gender=="Male")echo"checked"; echo"> Male </br>
	<input type = 'radio' name = 'gender' id='genderfemale' value = 'Female' "; if ($gender=="Female")echo"checked"; echo"> Female </br>
	</div>
	
	
	<!--Mailing-->

		<div class='col-md-5 col-xs-6";if ($streetAddresserror!=null) echo" has-error'";echo">
			<label for='sAddress' >Street Address</label>
			<div class='input-group'>
			<input type = 'text' name = 'sAddress' value='$streetAddress' placeholder = 'Street Address' title= 'Please enter your Street Address' required class='form-control'></br>
		<span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>
		</div>
		<p class='errorsentence'>$streetAddresserror</p>
		</div>	
	 
		<div class='col-md-5 col-xs-6";if ($addressLine2error!=null) echo" has-error'";echo">
			<label for='address2' >Address Line 2</label>
			<div class='input-group'>
			<input type = 'text' name = 'address2'  value='$addressLine2'placeholder = 'Address Line 2' title= 'Please enter Address Line 2' required class='form-control'></br>
		 <span class='input-group-addon'><i class='fa fa-home'></i></span>
		</div>
		 <p class='errorsentence'>$addressLine2error</p>
		 </div>
		 
		<div class='col-md-5 col-xs-6";if ($cityerror!=null) echo" has-error'";echo">
			<label for='City' >City</label>
			<div class='input-group'>
			<input type = 'text' name = 'city' value='$city' placeholder = 'City' title= 'Please enter City' required class='form-control'></br>
			<span class='input-group-addon'><i class='glyphicon glyphicon-home'></i></span>
		</div>
			<p class='errorsentence'>$cityerror</p>
		 </div>
		 
		 
		 <div class='col-md-5 col-xs-6'>
		  <label for='country' >Country</label>
		  <div class='input-group'>
			<select name = 'country' class='form-control'>
		 
		 <option value='Afghanistan' "; if ($country=="Afghanistan")echo"selected"; echo">Afghanistan</option>
	<option value='Åland Islands' "; if ($country=="Åland Islands")echo"selected"; echo">Åland Islands</option>
	<option value='Albania' "; if ($country=="Albania")echo"selected"; echo">Albania</option>
	<option value='Algeria' "; if ($country=="Algeria")echo"selected"; echo">Algeria</option>
	<option value='American Samoa' "; if ($country=="American Samoa")echo"selected"; echo">American Samoa</option>
	<option value='Andorra' "; if ($country=="Andorra")echo"selected"; echo">Andorra</option>
	<option value='Angola' "; if ($country=="Angola")echo"selected"; echo">Angola</option>
	<option value='Anguilla' "; if ($country=="Anguilla")echo"selected"; echo">Anguilla</option>
	<option value='Antarctica' "; if ($country=="Antarctica")echo"selected"; echo">Antarctica</option>
	<option value='Antigua and Barbuda' "; if ($country=="Antigua and Barbuda")echo"selected"; echo">Antigua and Barbuda</option>
	<option value='Argentina' "; if ($country=="Argentina")echo"selected"; echo">Argentina</option>
	<option value='Armenia' "; if ($country=="Armenia")echo"selected"; echo">Armenia</option>
	<option value='Aruba' "; if ($country=="Aruba")echo"selected"; echo">Aruba</option>
	<option value='Australia' "; if ($country=="Australia")echo"selected"; echo">Australia</option>
	<option value='Austria' "; if ($country=="Austria")echo"selected"; echo">Austria</option>
	<option value='Azerbaijan' "; if ($country=="Azerbaijan")echo"selected"; echo">Azerbaijan</option>
	<option value='Bahamas' "; if ($country=="Bahamas")echo"selected"; echo">Bahamas</option>
	<option value='Bahrain' "; if ($country=="Bahrain")echo"selected"; echo">Bahrain</option>
	<option value='Bangladesh' "; if ($country=="Bangladesh")echo"selected"; echo">Bangladesh</option>
	<option value='Barbados' "; if ($country=="Barbados")echo"selected"; echo">Barbados</option>
	<option value='Belarus' "; if ($country=="Belarus")echo"selected"; echo">Belarus</option>
	<option value='Belgium' "; if ($country=="Belgium")echo"selected"; echo">Belgium</option>
	<option value='Belize' "; if ($country=="Belize")echo"selected"; echo">Belize</option>
	<option value='Benin' "; if ($country=="Benin")echo"selected"; echo">Benin</option>
	<option value='Bermuda' "; if ($country=="Bermuda")echo"selected"; echo">Bermuda</option>
	<option value='Bhutan' "; if ($country=="Bhutan")echo"selected"; echo">Bhutan</option>
	<option value='Bolivia, Plurinational State of' "; if ($country=="Bolivia, Plurinational State of")echo"selected"; echo">Bolivia, Plurinational State of</option>
	<option value='Bonaire, Sint Eustatius and Saba' "; if ($country=="Bonaire, Sint Eustatius and Saba")echo"selected"; echo">Bonaire, Sint Eustatius and Saba</option>
	<option value='Bosnia and Herzegovina' "; if ($country=="Bosnia and Herzegovina")echo"selected"; echo">Bosnia and Herzegovina</option>
	<option value='Botswana' "; if ($country=="Botswana")echo"selected"; echo">Botswana</option>
	<option value='Bouvet Island' "; if ($country=="Bouvet Island")echo"selected"; echo">Bouvet Island</option>
	<option value='Brazil' "; if ($country=="Brazil")echo"selected"; echo">Brazil</option>
	<option value='British Indian Ocean Territory' "; if ($country=="British Indian Ocean Territory")echo"selected"; echo">British Indian Ocean Territory</option>
	<option value='Brunei Darussalam' "; if ($country=="Brunei Darussalam")echo"selected"; echo">Brunei Darussalam</option>
	<option value='Bulgaria' "; if ($country=="Bulgaria")echo"selected"; echo">Bulgaria</option>
	<option value='Burkina Faso' "; if ($country=="Burkina Faso")echo"selected"; echo">Burkina Faso</option>
	<option value='Burundi' "; if ($country=="Burundi")echo"selected"; echo">Burundi</option>
	<option value='Cambodia' "; if ($country=="Cambodia")echo"selected"; echo">Cambodia</option>
	<option value='Cameroon' "; if ($country=="Cameroon")echo"selected"; echo">Cameroon</option>
	<option value='Canada' "; if ($country=="Canada")echo"selected"; echo">Canada</option>
	<option value='Cape Verde' "; if ($country=="Cape Verde")echo"selected"; echo">Cape Verde</option>
	<option value='Cayman Islands' "; if ($country=="Cayman Islands")echo"selected"; echo">Cayman Islands</option>
	<option value='Central African Republic' "; if ($country=="Central African Republic")echo"selected"; echo">Central African Republic</option>
	<option value='Chad' "; if ($country=="Chad")echo"selected"; echo">Chad</option>
	<option value='Chile' "; if ($country=="Chile")echo"selected"; echo">Chile</option>
	<option value='China' "; if ($country=="China")echo"selected"; echo">China</option>
	<option value='Christmas Island' "; if ($country=="Christmas Island")echo"selected"; echo">Christmas Island</option>
	<option value='Cocos (Keeling) Islands' "; if ($country=="Cocos (Keeling) Islands")echo"selected"; echo">Cocos (Keeling) Islands</option>
	<option value='Colombia' "; if ($country=="Colombia")echo"selected"; echo">Colombia</option>
	<option value='Comoros' "; if ($country=="Comoros")echo"selected"; echo">Comoros</option>
	<option value='Congo' "; if ($country=="Congo")echo"selected"; echo">Congo</option>
	<option value='Congo, the Democratic Republic of the' "; if ($country=="Congo, the Democratic Republic of the")echo"selected"; echo">Congo, the Democratic Republic of the</option>
	<option value='Cook Islands' "; if ($country=="Cook Islands")echo"selected"; echo">Cook Islands</option>
	<option value='Costa Rica' "; if ($country=="Costa Rica")echo"selected"; echo">Costa Rica</option>
	<option value='Côte d'Ivoire' "; if ($country=="Côte d'Ivoire")echo"selected"; echo">Côte d'Ivoire</option>
	<option value='Croatia' "; if ($country=="Croatia")echo"selected"; echo">Croatia</option>
	<option value='Cuba' "; if ($country=="Cuba")echo"selected"; echo">Cuba</option>
	<option value='Curaçao' "; if ($country=="Curaçao")echo"selected"; echo">Curaçao</option>
	<option value='Cyprus' "; if ($country=="Cyprus")echo"selected"; echo">Cyprus</option>
	<option value='Czech Republic' "; if ($country=="Czech Republic")echo"selected"; echo">Czech Republic</option>
	<option value='Denmark' "; if ($country=="Denmark")echo"selected"; echo">Denmark</option>
	<option value='Djibouti' "; if ($country=="Djibouti")echo"selected"; echo">Djibouti</option>
	<option value='Dominica' "; if ($country=="Dominica")echo"selected"; echo">Dominica</option>
	<option value='Dominican Republic' "; if ($country=="Dominican Republic")echo"selected"; echo">Dominican Republic</option>
	<option value='Ecuador' "; if ($country=="Ecuador")echo"selected"; echo">Ecuador</option>
	<option value='Egypt' "; if ($country=="Egypt")echo"selected"; echo">Egypt</option>
	<option value='El Salvador' "; if ($country=="El Salvador")echo"selected"; echo">El Salvador</option>
	<option value='Equatorial Guinea' "; if ($country=="Equatorial Guinea")echo"selected"; echo">Equatorial Guinea</option>
	<option value='Eritrea' "; if ($country=="Eritrea")echo"selected"; echo">Eritrea</option>
	<option value='Estonia' "; if ($country=="Estonia")echo"selected"; echo">Estonia</option>
	<option value='Ethiopia' "; if ($country=="Ethiopia")echo"selected"; echo">Ethiopia</option>
	<option value='Falkland Islands (Malvinas)' "; if ($country=="Falkland Islands (Malvinas)")echo"selected"; echo">Falkland Islands (Malvinas)</option>
	<option value='Faroe Islands' "; if ($country=="Faroe Islands")echo"selected"; echo">Faroe Islands</option>
	<option value='Fiji' "; if ($country=="Fiji")echo"selected"; echo">Fiji</option>
	<option value='Finland' "; if ($country=="Finland")echo"selected"; echo">Finland</option>
	<option value='France' "; if ($country=="France")echo"selected"; echo">France</option>
	<option value='French Guiana' "; if ($country=="French Guiana")echo"selected"; echo">French Guiana</option>
	<option value='French Polynesia' "; if ($country=="French Polynesia")echo"selected"; echo">French Polynesia</option>
	<option value='French Southern Territories' "; if ($country=="French Southern Territories")echo"selected"; echo">French Southern Territories</option>
	<option value='Gabon' "; if ($country=="Gabon")echo"selected"; echo">Gabon</option>
	<option value='Gambia' "; if ($country=="Gambia")echo"selected"; echo">Gambia</option>
	<option value='Georgia' "; if ($country=="Georgia")echo"selected"; echo">Georgia</option>
	<option value='Germany' "; if ($country=="Germany")echo"selected"; echo">Germany</option>
	<option value='Ghana' "; if ($country=="Ghana")echo"selected"; echo">Ghana</option>
	<option value='Gibraltar' "; if ($country=="Gibraltar")echo"selected"; echo">Gibraltar</option>
	<option value='Greece' "; if ($country=="Greece")echo"selected"; echo">Greece</option>
	<option value='Greenland' "; if ($country=="Greenland")echo"selected"; echo">Greenland</option>
	<option value='Grenada' "; if ($country=="Grenada")echo"selected"; echo">Grenada</option>
	<option value='Guadeloupe' "; if ($country=="Guadeloupe")echo"selected"; echo">Guadeloupe</option>
	<option value='Guam' "; if ($country=="Guam")echo"selected"; echo">Guam</option>
	<option value='Guatemala' "; if ($country=="Guatemala")echo"selected"; echo">Guatemala</option>
	<option value='Guernsey' "; if ($country=="Guernsey")echo"selected"; echo">Guernsey</option>
	<option value='Guinea' "; if ($country=="Guinea")echo"selected"; echo">Guinea</option>
	<option value='Guinea-Bissau' "; if ($country=="Guinea-Bissau")echo"selected"; echo">Guinea-Bissau</option>
	<option value='Guyana' "; if ($country=="Guyana")echo"selected"; echo">Guyana</option>
	<option value='Haiti' "; if ($country=="Haiti")echo"selected"; echo">Haiti</option>
	<option value='Heard Island and McDonald Islands' "; if ($country=="Heard Island and McDonald Islands")echo"selected"; echo">Heard Island and McDonald Islands</option>
	<option value='Holy See (Vatican City State)' "; if ($country=="Holy See (Vatican City State)")echo"selected"; echo">Holy See (Vatican City State)</option>
	<option value='Honduras' "; if ($country=="Honduras")echo"selected"; echo">Honduras</option>
	<option value='Hong Kong' "; if ($country=="Hong Kong")echo"selected"; echo">Hong Kong</option>
	<option value='Hungary' "; if ($country=="Hungary")echo"selected"; echo">Hungary</option>
	<option value='Iceland' "; if ($country=="Iceland")echo"selected"; echo">Iceland</option>
	<option value='India' "; if ($country=="India")echo"selected"; echo">India</option>
	<option value='Indonesia' "; if ($country=="Indonesia")echo"selected"; echo">Indonesia</option>
	<option value='Iran, Islamic Republic of' "; if ($country=="Iran, Islamic Republic of")echo"selected"; echo">Iran, Islamic Republic of</option>
	<option value='Iraq' "; if ($country=="Iraq")echo"selected"; echo">Iraq</option>
	<option value='Ireland' "; if ($country=="Ireland")echo"selected"; echo">Ireland</option>
	<option value='Isle of Man' "; if ($country=="Isle of Man")echo"selected"; echo">Isle of Man</option>
	<option value='Israel' "; if ($country=="Israel")echo"selected"; echo">Israel</option>
	<option value='Italy' "; if ($country=="Italy")echo"selected"; echo">Italy</option>
	<option value='Jamaica' "; if ($country=="Jamaica")echo"selected"; echo">Jamaica</option>
	<option value='Japan' "; if ($country=="Japan")echo"selected"; echo">Japan</option>
	<option value='Jersey' "; if ($country=="Jersey")echo"selected"; echo">Jersey</option>
	<option value='Jordan' "; if ($country=="Jordan")echo"selected"; echo">Jordan</option>
	<option value='Kazakhstan' "; if ($country=="Kazakhstan")echo"selected"; echo">Kazakhstan</option>
	<option value='Kenya' "; if ($country=="Kenya")echo"selected"; echo">Kenya</option>
	<option value='Kiribati' "; if ($country=="Kiribati")echo"selected"; echo">Kiribati</option>
	<option value='Korea, Democratic People's Republic of' "; if ($country=="Korea, Democratic People's Republic of")echo"selected"; echo">Korea, Democratic People's Republic of</option>
	<option value='Korea, Republic of' "; if ($country=="Korea, Republic of")echo"selected"; echo">Korea, Republic of</option>
	<option value='Kuwait' "; if ($country=="Kuwait")echo"selected"; echo">Kuwait</option>
	<option value='Kyrgyzstan' "; if ($country=="Kyrgyzstan")echo"selected"; echo">Kyrgyzstan</option>
	<option value='Lao People's Democratic Republic' "; if ($country=="Lao People's Democratic Republic")echo"selected"; echo">Lao People's Democratic Republic</option>
	<option value='Latvia' "; if ($country=="Latvia")echo"selected"; echo">Latvia</option>
	<option value='Lebanon' "; if ($country=="Lebanon")echo"selected"; echo">Lebanon</option>
	<option value='Lesotho' "; if ($country=="Lesotho")echo"selected"; echo">Lesotho</option>
	<option value='Liberia' "; if ($country=="Liberia")echo"selected"; echo">Liberia</option>
	<option value='Libya' "; if ($country=="Libya")echo"selected"; echo">Libya</option>
	<option value='Liechtenstein' "; if ($country=="Liechtenstein")echo"selected"; echo">Liechtenstein</option>
	<option value='Lithuania' "; if ($country=="Lithuania")echo"selected"; echo">Lithuania</option>
	<option value='Luxembourg' "; if ($country=="Luxembourg")echo"selected"; echo">Luxembourg</option>
	<option value='Macao' "; if ($country=="Macao")echo"selected"; echo">Macao</option>
	<option value='Macedonia, the former Yugoslav Republic of' "; if ($country=="Macedonia, the former Yugoslav Republic of")echo"selected"; echo">Macedonia, the former Yugoslav Republic of</option>
	<option value='Madagascar' "; if ($country=="Madagascar")echo"selected"; echo">Madagascar</option>
	<option value='Malawi' "; if ($country=="Malawi")echo"selected"; echo">Malawi</option>
	<option value='Malaysia' "; if ($country=="Malaysia")echo"selected"; echo">Malaysia</option>
	<option value='Maldives' "; if ($country=="Maldives")echo"selected"; echo">Maldives</option>
	<option value='Mali' "; if ($country=="Mali")echo"selected"; echo">Mali</option>
	<option value='Malta' "; if ($country=="Malta")echo"selected"; echo">Malta</option>
	<option value='Marshall Islands' "; if ($country=="Marshall Islands")echo"selected"; echo">Marshall Islands</option>
	<option value='Martinique' "; if ($country=="Martinique")echo"selected"; echo">Martinique</option>
	<option value='Mauritania' "; if ($country=="Mauritania")echo"selected"; echo">Mauritania</option>
	<option value='Mauritius' "; if ($country=="Mauritius")echo"selected"; echo">Mauritius</option>
	<option value='Mayotte' "; if ($country=="Mayotte")echo"selected"; echo">Mayotte</option>
	<option value='Mexico' "; if ($country=="Mexico")echo"selected"; echo">Mexico</option>
	<option value='Micronesia, Federated States of' "; if ($country=="Micronesia, Federated States of")echo"selected"; echo">Micronesia, Federated States of</option>
	<option value='Moldova, Republic of' "; if ($country=="Moldova, Republic of")echo"selected"; echo">Moldova, Republic of</option>
	<option value='Monaco' "; if ($country=="Monaco")echo"selected"; echo">Monaco</option>
	<option value='Mongolia' "; if ($country=="Mongolia")echo"selected"; echo">Mongolia</option>
	<option value='Montenegro' "; if ($country=="Montenegro")echo"selected"; echo">Montenegro</option>
	<option value='Montserrat' "; if ($country=="Montserrat")echo"selected"; echo">Montserrat</option>
	<option value='Morocco' "; if ($country=="Morocco")echo"selected"; echo">Morocco</option>
	<option value='Mozambique' "; if ($country=="Mozambique")echo"selected"; echo">Mozambique</option>
	<option value='Myanmar' "; if ($country=="Myanmar")echo"selected"; echo">Myanmar</option>
	<option value='Namibia' "; if ($country=="Namibia")echo"selected"; echo">Namibia</option>
	<option value='Nauru' "; if ($country=="Nauru")echo"selected"; echo">Nauru</option>
	<option value='Nepal' "; if ($country=="Nepal")echo"selected"; echo">Nepal</option>
	<option value='Netherlands' "; if ($country=="Netherlands")echo"selected"; echo">Netherlands</option>
	<option value='New Caledonia' "; if ($country=="New Caledonia")echo"selected"; echo">New Caledonia</option>
	<option value='New Zealand' "; if ($country=="New Zealand")echo"selected"; echo">New Zealand</option>
	<option value='Nicaragua' "; if ($country=="Nicaragua")echo"selected"; echo">Nicaragua</option>
	<option value='Niger' "; if ($country=="Niger")echo"selected"; echo">Niger</option>
	<option value='Nigeria' "; if ($country=="Nigeria")echo"selected"; echo">Nigeria</option>
	<option value='Niue' "; if ($country=="Niue")echo"selected"; echo">Niue</option>
	<option value='Norfolk Island' "; if ($country=="Norfolk Island")echo"selected"; echo">Norfolk Island</option>
	<option value='Northern Mariana Islands' "; if ($country=="Northern Mariana Islands")echo"selected"; echo">Northern Mariana Islands</option>
	<option value='Norway' "; if ($country=="Norway")echo"selected"; echo">Norway</option>
	<option value='Oman' "; if ($country=="Oman")echo"selected"; echo">Oman</option>
	<option value='Pakistan' "; if ($country=="Pakistan")echo"selected"; echo">Pakistan</option>
	<option value='Palau' "; if ($country=="Palau")echo"selected"; echo">Palau</option>
	<option value='Palestinian Territory, Occupied' "; if ($country=="Palestinian Territory, Occupied")echo"selected"; echo">Palestinian Territory, Occupied</option>
	<option value='Panama' "; if ($country=="Panama")echo"selected"; echo">Panama</option>
	<option value='Papua New Guinea' "; if ($country=="Papua New Guinea")echo"selected"; echo">Papua New Guinea</option>
	<option value='Paraguay' "; if ($country=="Paraguay")echo"selected"; echo">Paraguay</option>
	<option value='Peru' "; if ($country=="Peru")echo"selected"; echo">Peru</option>
	<option value='Philippines' "; if ($country=="Philippines")echo"selected"; echo">Philippines</option>
	<option value='Pitcairn' "; if ($country=="Pitcairn")echo"selected"; echo">Pitcairn</option>
	<option value='Poland' "; if ($country=="Poland")echo"selected"; echo">Poland</option>
	<option value='Portugal' "; if ($country=="Portugal")echo"selected"; echo">Portugal</option>
	<option value='Puerto Rico' "; if ($country=="Puerto Rico")echo"selected"; echo">Puerto Rico</option>
	<option value='Qatar' "; if ($country=="Qatar")echo"selected"; echo">Qatar</option>
	<option value='Réunion' "; if ($country=="Réunion")echo"selected"; echo">Réunion</option>
	<option value='Romania' "; if ($country=="Romania")echo"selected"; echo">Romania</option>
	<option value='Russian Federation' "; if ($country=="Russian Federation")echo"selected"; echo">Russian Federation</option>
	<option value='Rwanda' "; if ($country=="Rwanda")echo"selected"; echo">Rwanda</option>
	<option value='Saint Barthélemy' "; if ($country=="Saint Barthélemy")echo"selected"; echo">Saint Barthélemy</option>
	<option value='Saint Helena, Ascension and Tristan da Cunha' "; if ($country=="Saint Helena, Ascension and Tristan da Cunha")echo"selected"; echo">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value='Saint Kitts and Nevis' "; if ($country=="Saint Kitts and Nevis")echo"selected"; echo">Saint Kitts and Nevis</option>
	<option value='Saint Lucia' "; if ($country=="Saint Lucia")echo"selected"; echo">Saint Lucia</option>
	<option value='Saint Martin (French part)' "; if ($country=="Saint Martin (French part)")echo"selected"; echo">Saint Martin (French part)</option>
	<option value='Saint Pierre and Miquelon' "; if ($country=="Saint Pierre and Miquelon")echo"selected"; echo">Saint Pierre and Miquelon</option>
	<option value='Saint Vincent and the Grenadines' "; if ($country=="Saint Vincent and the Grenadines")echo"selected"; echo">Saint Vincent and the Grenadines</option>
	<option value='Samoa' "; if ($country=="Samoa")echo"selected"; echo">Samoa</option>
	<option value='San Marino' "; if ($country=="San Marino")echo"selected"; echo">San Marino</option>
	<option value='Sao Tome and Principe' "; if ($country=="Sao Tome and Principe")echo"selected"; echo">Sao Tome and Principe</option>
	<option value='Saudi Arabia' "; if ($country=="Saudi Arabia")echo"selected"; echo">Saudi Arabia</option>
	<option value='Senegal' "; if ($country=="Senegal")echo"selected"; echo">Senegal</option>
	<option value='Serbia' "; if ($country=="Serbia")echo"selected"; echo">Serbia</option>
	<option value='Seychelles' "; if ($country=="Seychelles")echo"selected"; echo">Seychelles</option>
	<option value='Sierra Leone' "; if ($country=="Sierra Leone")echo"selected"; echo">Sierra Leone</option>
	<option value='Singapore' "; if ($country=="Singapore")echo"selected"; echo">Singapore</option>
	<option value='Sint Maarten (Dutch part)' "; if ($country=="Sint Maarten (Dutch part)")echo"selected"; echo">Sint Maarten (Dutch part)</option>
	<option value='Slovakia' "; if ($country=="Slovakia")echo"selected"; echo">Slovakia</option>
	<option value='Slovenia' "; if ($country=="Slovenia")echo"selected"; echo">Slovenia</option>
	<option value='Solomon Islands' "; if ($country=="Solomon Islands")echo"selected"; echo">Solomon Islands</option>
	<option value='Somalia' "; if ($country=="Somalia")echo"selected"; echo">Somalia</option>
	<option value='South Africa' "; if ($country=="South Africa")echo"selected"; echo">South Africa</option>
	<option value='South Georgia and the South Sandwich Islands' "; if ($country=="South Georgia and the South Sandwich Islands")echo"selected"; echo">South Georgia and the South Sandwich Islands</option>
	<option value='South Sudan' "; if ($country=="South Sudan")echo"selected"; echo">South Sudan</option>
	<option value='Spain' "; if ($country=="Spain")echo"selected"; echo">Spain</option>
	<option value='Sri Lanka' "; if ($country=="Sri Lanka")echo"selected"; echo">Sri Lanka</option>
	<option value='Sudan' "; if ($country=="Sudan")echo"selected"; echo">Sudan</option>
	<option value='Suriname' "; if ($country=="Suriname")echo"selected"; echo">Suriname</option>
	<option value='Svalbard and Jan Mayen' "; if ($country=="Svalbard and Jan Mayen")echo"selected"; echo">Svalbard and Jan Mayen</option>
	<option value='Swaziland' "; if ($country=="Swaziland")echo"selected"; echo">Swaziland</option>
	<option value='Sweden' "; if ($country=="Sweden")echo"selected"; echo">Sweden</option>
	<option value='Switzerland' "; if ($country=="Switzerland")echo"selected"; echo">Switzerland</option>
	<option value='Syrian Arab Republic' "; if ($country=="Syrian Arab Republic")echo"selected"; echo">Syrian Arab Republic</option>
	<option value='Taiwan, Province of China' "; if ($country=="Taiwan, Province of China")echo"selected"; echo">Taiwan, Province of China</option>
	<option value='Tajikistan' "; if ($country=="Tajikistan")echo"selected"; echo">Tajikistan</option>
	<option value='Tanzania, United Republic of' "; if ($country=="Tanzania, United Republic of")echo"selected"; echo">Tanzania, United Republic of</option>
	<option value='Thailand' "; if ($country=="Thailand")echo"selected"; echo">Thailand</option>
	<option value='Timor-Leste' "; if ($country=="Timor-Leste")echo"selected"; echo">Timor-Leste</option>
	<option value='Togo' "; if ($country=="Togo")echo"selected"; echo">Togo</option>
	<option value='Tokelau' "; if ($country=="Tokelau")echo"selected"; echo">Tokelau</option>
	<option value='Tonga' "; if ($country=="Tonga")echo"selected"; echo">Tonga</option>
	<option value='Trinidad and Tobago' "; if ($country=="Trinidad and Tobago")echo"selected"; echo">Trinidad and Tobago</option>
	<option value='Tunisia' "; if ($country=="Tunisia")echo"selected"; echo">Tunisia</option>
	<option value='Turkey' "; if ($country=="Turkey")echo"selected"; echo">Turkey</option>
	<option value='Turkmenistan' "; if ($country=="Turkmenistan")echo"selected"; echo">Turkmenistan</option>
	<option value='Turks and Caicos Islands' "; if ($country=="Turks and Caicos Islands")echo"selected"; echo">Turks and Caicos Islands</option>
	<option value='Tuvalu' "; if ($country=="Tuvalu")echo"selected"; echo">Tuvalu</option>
	<option value='Uganda' "; if ($country=="Uganda")echo"selected"; echo">Uganda</option>
	<option value='Ukraine' "; if ($country=="Ukraine")echo"selected"; echo">Ukraine</option>
	<option value='United Arab Emirates' "; if ($country=="United Arab Emirates")echo"selected"; echo">United Arab Emirates</option>
	<option value='United Kingdom' "; if ($country=="United Kingdom")echo"selected"; echo">United Kingdom</option>
	<option value='United States' "; if ($country=="United States")echo"selected"; echo">United States</option>
	<option value='United States Minor Outlying Islands' "; if ($country=="United States Minor Outlying Islands")echo"selected"; echo">United States Minor Outlying Islands</option>
	<option value='Uruguay' "; if ($country=="Uruguay")echo"selected"; echo">Uruguay</option>
	<option value='Uzbekistan' "; if ($country=="Uzbekistan")echo"selected"; echo">Uzbekistan</option>
	<option value='Vanuatu' "; if ($country=="Vanuatu")echo"selected"; echo">Vanuatu</option>
	<option value='Venezuela, Bolivarian Republic of' "; if ($country=="Venezuela, Bolivarian Republic of")echo"selected"; echo">Venezuela, Bolivarian Republic of</option>
	<option value='Viet Nam' "; if ($country=="Viet Nam")echo"selected"; echo">Viet Nam</option>
	<option value='Virgin Islands, British' "; if ($country=="Virgin Islands, British")echo"selected"; echo">Virgin Islands, British</option>
	<option value='Virgin Islands, U.S.' "; if ($country=="Virgin Islands, U.S.")echo"selected"; echo">Virgin Islands, U.S.</option>
	<option value='Wallis and Futuna' "; if ($country=="Wallis and Futuna")echo"selected"; echo">Wallis and Futuna</option>
	<option value='Western Sahara' "; if ($country=="Western Sahara")echo"selected"; echo">Western Sahara</option>
	<option value='Yemen' "; if ($country=="Yemen")echo"selected"; echo">Yemen</option>
	<option value='Zambia' "; if ($country=="Zambia")echo"selected"; echo">Zambia</option>
	<option value='Zimbabwe' "; if ($country=="Zimbabwe")echo"selected"; echo">Zimbabwe</option>

			
			
			</select>	
			<span class='input-group-addon'><i class='fa fa-flag-checkered'></i></span>
		</div>
		</div>								
			<legend>Communication</legend>	
	<!--Communication-->			
		
		<div class='col-md-5 col-xs-6";if ($emailerror!=null) echo" has-error'";echo">
			<label for='email' >Email</label>
			<div class='input-group'>
			<input type = 'email' name = 'email' value='$email' placeholder = 'Email' title= 'Please enter your Email' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-envelope'></i></span>
		</div>
			<p class='errorsentence'>$emailerror</p>
		</div>
		 
		<div class='col-md-5 col-xs-6";if ($hPhoneerror!=null) echo" has-error'";echo">
			<label for='hPhone' >Home Phone</label>
			<div class='input-group'>
			<input type = 'text' name = 'hPhone' value='$hPhone' placeholder = 'Home Phone 876-123-4567' title= 'Please enter Home Phone 876-123-4567' required class='form-control'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-phone-alt'></i></span>
		</div>
			<p class='errorsentence'>$hPhoneerror</p>
		 </div>
		
		<div class='col-md-5 col-xs-6";if ($wPhoneerror!=null) echo" has-error'";echo">
			<label for='wPhone' >Work Phone</label>
			<div class='input-group'>
			<input type = 'text' name = 'wPhone' value='$wPhone' placeholder = 'Work Phone 876-123-4567' title= 'Please enter Work Phone 876-123-4567' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-earphone'></i></span>
		</div>
			<p class='errorsentence'>$wPhoneerror</p>
		 </div>
		
		<div class='col-md-5 col-xs-6";if ($cPhoneerror!=null) echo" has-error'";echo">
			<label for='cPhone' >Cell Phone</label>
			<div class='input-group'>
			<input type = 'text' name = 'cPhone' value='$cPhone' placeholder = 'Cell Phone 876-123-4567' title= 'Please enter Cell Phone 876-123-4567' required class='form-control' 
			>
			<span class='input-group-addon'><i class='glyphicon glyphicon-phone'></i></span>
		</div>
			</br>
			<p class='errorsentence'>$cPhoneerror</p>
		</div>
		 
		 
		 



	 <div class='col-md-5 col-xs-6'>
		  <label for='qualification' >Current level of Qualification</label>
		  <div class='input-group'>
    <select name='qualification'class='form-control'>
    <!--<option value='' placeholder='Select Option....' >Select Option.....</option>-->
    <option value='Bachelor of Medicine'>Bachelor of Medicine</option>
    <option value='Doctor of Medicine'>Doctor of Medicine</option>
    <option value='Doctor of Osteopathic Medicine'>Doctor of Osteopathic Medicine</option>
    <option value='Bachelor of Surgery'>Bachelor of Surgery</option>
	<option value='Doctor of Medicine by research'>Doctor of Medicine by research</option>
    <option value='Doctor of Philosophy'>Doctor of Philosophy</option>
    <option value='Master of Clinical Medicine'>Master of Clinical Medicine</option>
	<option value='Master of Medical Science'>Master of Medical Science</option>
    <option value='Master of Medicine'>Master of Medicine </option>
    <option value='Master of Philosophy'>Master of Philosophy </option>
	<option value='Master of Surgery'>Master of Surgery</option>
    <option value='Master of Science in Medicine or Surgery'>Master of Science in Medicine or Surgery</option>
    <option value='Doctor of Clinical Medicine'>Doctor of Clinical Medicine</option>
	<option value='Doctor of Clinical Surgery'>Doctor of Clinical Surgery</option>
	<option value='Doctor of Medical Science'>Doctor of Medical Science</option>
	<option value='Doctor of Surgery'>Doctor of Surgery</option>
    </select>
		<span class='input-group-addon'><i class='fa fa-flag-checkered'></i></span>
		</div>
		</div>	
	
	<h4>:</h4><br>
	 <div class='col-md-5 col-xs-6' style='border:1px solid;'>
		  <label for='qualification' >Upload an image of Yourself</label>
		  <div class='input-group'>
	
	
	 <input type='file' name='fileToUpload' id='fileToUpload'>
	 <span class='input-group-addon'><i class='fa fa-flag-checkered'></i></span>
		</div>
		</div>	
	 <br><br>

	<br><br>
	
	
	<div class='form-group' style='text-align:center'>
		  <div class='col-lg-10 col-lg-offset-2'>
			<button type='button' name='reset' id='reset' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span> Cancel</button>
			<input type='submit' value='Add Nurse' name='submit' class='btn btn-success'>  </div>
		</div>
	
<button name='submit' class='btn btn-success' type='submit'> Submit </button>
</form>

";
//echo "path ".$target_file."<br> <img src='$target_file'/>";
 ?>
</div><!-- #endregion displayarea End -->
<br>
<?php include 'footer.php';

//session_destroy();
?>
</body>
</html>