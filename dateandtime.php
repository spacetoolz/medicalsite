<html>

<head>
<script type="text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               //setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
	  
      <style>
	  body {
    /* //color: blue; */
    color: #0052cc;
	text-align: center;
	line-height: 1.5;
	/* //letter-spacing: 3px; */
}
	  
      </style>
	  

</head>

<body onload="JavaScript:AutoRefresh(1000);">
      <!--<p>This page will refresh every 5 seconds.</p>-->
<?php
date_default_timezone_set("America/Jamaica");
//echo date_default_timezone_get();
echo  "<h3>".date("l").", " . date("d/m/Y") . "<br>". date("h:i:s a")."</h3>";
?>
</body>
</html>