<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
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
                
<div id="displayarea" class="row" >								
<?php Session_start();
include 'navbar.php';?>

<h1> Contact US</h1>

<!--<div class="container">-->
    <div class="row" style="margin-left:15%; margin-right:15%">
        <div class="row">
            <div class="well well-sm">
                <form>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
						<div class="form-group">
                            <label for="cellnumber">
                                Cell number</label>
                            <input type="text" class="form-control" id="cellnumber" placeholder="cell number" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
						<br>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                                <option value="complain">Complain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
			<div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19872.34040237774!2d-76.76897512294806!3d18.015276914063577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe483695dda08fef!2sUniversity+of+Technology%2C+Jamaica!5e0!3m2!1sen!2str!4v1500174593051" width="880" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
   </div>
        </div>
     
   </div>
 
<!--</div>-->


</div><!-- #endregion displayarea End -->


<!--BMI Calculator-->

	<div id='BMIModal' class='modal fade' role='dialog'>
	  <div class='modal-dialog'>

		<!-- Modal content-->
		<div class='modal-content'>
		  <div class='modal-header'>
			<button type='button' class='close' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span></button>
			<h4 class='modal-title'><i class="fa fa-calculator" aria-hidden="true"></i> BMI Calculator</h4>
		  </div>
		  <div class='modal-body'>
	

	<form>
						<center>
	<table style='width:90%' class='table table-striped table-hover table-bordered' >
	  <tr class='info'>
		<!--<th>Fields</th>-->
		<th>User Input</th> 
	   </tr>
	  <tr>
		<!--<td>Weight</td>-->
		<td>
			<div class='input-group'>
				<input type = 'number' step='any' name = 'weight' id='weight' value='$weight' placeholder = 'Weight (kilograms)' title= 'Please enter your weight' required class='form-control col-md-5 col-xs-6'>
				<span class='input-group-addon'><i class='glyphicon glyphicon-scale'></i></span>
			</div> 		
		</td>
	   </tr>
	  <tr>
		<!--<td>Height</td>-->
		<td>
		<label for='height' >Height</label>
		<div class='input-group'>
			<input type = 'number' step='any' name = 'height' id= 'height' value='$height' placeholder = 'Height (meters)' title= 'Please enter your height' required class='form-control'>
			<span class='input-group-addon'><i class='glyphicon glyphicon-paste'></i></span>
		</div>
		</td>
		
	  </tr>
	  <tr>
		<!--<td>BMI</td>-->
		<td><p id="bmi" value="5"></p></td>
	  </tr> 
	  <tr>
		<!--<td>BMI Class</td>-->
		<td><p id="bmiclass"></p></td>
	  </tr> 
	
	  
	</table>
	<button type='button' class='btn btn-default' name="submit" onclick="calculateBmi()"><i class="fa fa-calculator" aria-hidden="true"></i> Calculate BMI</button>
	</form>
	</center>	  
		  
			  
		  </div>
		  <div class='modal-footer'>
			<button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-off'></span> Close</button>
			
		  </div>
		</div>

		
	  </div>
	</div>
	
		
<?php include 'footer.php';?>

</body>
</html>

