<!DOCTYPE html>
<html>
<head>
<title>Our Services</title>
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
<?php Session_start();
include 'navbar.php';?>

<h1> Our Services</h1>

       <!-- Page Content -->
    <div class="container">



        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://www.cmg.md/wp-content/uploads/2012/12/digital-imaging-700x300.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Radiology Services</h3>
                <h4>$5,000JMD - $10,000JMD</h4>
                <p> Ultrasound & X-ray for your medical services. Our range of services includes x-rays, ultrasounds, mammography, barium meal, barium enema, intravenous pyelogram, hysterosalpinogram and CT scan. </p>
             <!--   <a class="btn btn-primary" href="#">MAKE AN APPOINTMENT <span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="https://www.obgyn.pitt.edu/sites/default/files/slider-image/General%20Patient%20Ultrasound_1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Obstetrics and Gynecology Services</h3>
                <h4>$3,000JMD - $10,000JMD</h4>
                <p>Our women's health services include services for breast care, maternity, newborn care and sexual health.</p>
               <!-- <a class="btn btn-primary" href="#">MAKE AN APPOINTMENT<span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://www.cmg.md/wp-content/uploads/2013/01/patient-doctor-700x300.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>General Doctor's Visit</h3>
                <h4>$2,000JMD</h4>
                <p>Our doctor consultation platform which enables you to ask a doctor & get your questions answered by top medical adviserss, consultants and physicians at affordable prices.</p>
              <!--  <a class="btn btn-primary" href="#">MAKE AN APPOINTMENT <span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://www.huntbridge.com/wp-content/uploads/2016/12/blood-test-700x300.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Blood Analysis</h3>
                <h4>$500JMD - $2000JMD</h4>
                <p>Some of our wide range of lab tests includes Blood Urea Nitrogen (BUN), Complete blood count, Fast Blood Sugar (FBS), Postprandial Blood Sugar (PPBS), Lipid Profile, Serum Creatinine, Uric Acid and more.</p>
              <!--  <a class="btn btn-primary" href="#">MAKE AN APPOINTMENT<span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://kardiniahealth.com.au/files/2015/04/Flu-Shot-2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Immunization Services</h3>
                <h4>$300JMD - $1,000JMD</h4>
                <p>We provide a wide range of vaccines to prevent and control vaccine-preventable diseases among children, adolescents and adults.</p>
              <!--  <a class="btn btn-primary" href="#">MAKE AN APPOINTMENT<span class="glyphicon glyphicon-chevron-right"></span></a>-->
            </div>
        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->
      
    </div><!-- End container -->
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

