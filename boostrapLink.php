<html>

<head>
<!--
<script>
    $("#title").val("<?php echo $_SESSION['title'] ?>");
</script>

<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#title").attr("href", "https://www.w3schools.com/jquery");
    });
});
</script>-->

<script>


	function check() {
		if($gender =='Female'){
    document.getElementById("genderfemale").checked ;
    //document.getElementById("gendermale").checked = false;
		}
		if($gender=='Male'){
  //  document.getElementById("genderfemale").checked = false;
    document.getElementById("gendermale").checked ;
		}
		
	}

//ailmentType function
function check() {
    document.getElementById("ailmentnone").checked = false;
}

function uncheck() {
	
	//if(document.getElementById("ailmentnone").checked = true;){}
	
    document.getElementById("ailmentType1").checked = false;
    document.getElementById("ailmentType2").checked = false;
    document.getElementById("ailmentType3").checked = false;
    document.getElementById("ailmentType4").checked = false;
    document.getElementById("ailmentType5").checked = false;
    document.getElementById("ailmentType6").checked = false;
    document.getElementById("ailmentType7").checked = false;
    document.getElementById("ailmentType8").checked = false;
    document.getElementById("ailmentType9").checked = false;
    document.getElementById("ailmentType10").checked = false;
	
	document.getElementById("ailmentnone").checked = true;
	
}
function capital($caps) {
    //document.getElementById("fname").value =document.getElementById("fnamecaps").value;
  // ucwords($caps);

   //ucwords(document.getElementById("fname").value);
	//alert("The input value has changed. The new value is: "+ ucwords(document.getElementById("fname").value));
	alert("The input value has changed. The new value is: "+$caps);
}


$(document).ready(function(){
                $(function () {
                    $("input[id$='dob']").datepicker({
                        dateFormat: 'yy-mm-dd',
                     })
                });
                });

</script>



<style>



    
div {

    padding: 20px;
 
}




#myTabContent,#diplayTab,form{
	
	background-color:white;
	margin-right: 5%;
	margin-left: 5%;
	opacity: 0.9;
	
}


ul{
	list-style:none;
}



 .tooltip > .tooltip-inner {
      background-color: #0052cc; 
      color: #FFFFFF; 
      border: 1px solid green; 
     font-size: 20px;
  }
  
  h1{
	  color:blue;
	  }
	  
	  .errorsentence{
		  color:red;
		  }
	  i{
		  color:black;
		  
		  }
</style>

<!-- Latest compiled and minified CSS 
<!-<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

<!- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-3.2.1.min.js"></script>

<!- Latest compiled JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->



<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

 <script type="text/javascript">
        $(document).ready(function () {
            $("#reset").click(function () {
                $("input[type=text]").val("");
                $("textarea").val("");
            });
        });
 </script>

</head>

<body>


<?php

//echo"Test"
echo"

<div id ='footer2' class='footer2' style='text-align:center'>Designed by: Ranike Williams | 1201282 | necowill@gmail.com | HTML | CSS | JavaScript | Bootstrap | PHP |
&copy; ";echo date("Y");echo"



</div>
";
?>

</body>
</html>