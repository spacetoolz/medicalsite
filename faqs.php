<!DOCTYPE html>
<html>
<head>
<title>FAQS</title>
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
<?php session_start();
include 'navbar.php';

$_SESSION['userName']="";

?>

<h1> Frequently Asked Questions (FAQS)</h1>

<!--<div class="container -->
    <div class="panel-group" id="faqAccordion">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: How do I get a prescription refilled?</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>To have a prescription refilled, please have your pharmacy contact us at 1(876)123-4567.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: Will I always see my own doctor?</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>When you have an appointment scheduled with your own doctor, that is who you will see. If you need to schedule an appointment urgently and your doctor is not available, we may ask if you would like to be seen by another doctor or a nurse practitioner.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What forms of payment are accepted?</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We accept cash, debit/credit card and cheques as payment..</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is the procedure for cancellations?</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>If you cannot attend an appointment for any reason please inform us as soon as possible in order for us to give the slot to someone else. </p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What if I do not have insurance?</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We accept cash, personal cheques, Visa and MasterCard. </p>
                </div>
            </div>
        </div>
	
       <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What age range of patients do you see?</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>We provide healthcare for the entire family. </p>
                </div>
            </div>
        </div>

        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question6">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Q: What is your policy for releasing medical records?</a>
              </h4>

            </div>
            <div id="question6" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary">Answer</span></h5>

                    <p>All medical records are property of the clinic. If medical records need to be released, we will ask you to sign a written request for these records to be copied and mailed to a requested party. </p>
                </div>
            </div>
        </div>
   
    </div>
    <!--/panel-group
</div>-->

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

