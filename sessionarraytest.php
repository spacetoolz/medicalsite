<?php
session_start();
$_SESSION['cart']=array();
//anyother php code
array_push($_SESSION['cart'],20);	
array_push($_SESSION['cart'],40);	
array_push($_SESSION['cart'],60);	

foreach ($_SESSION['cart'] as $prodID ):
	echo " $prodID  ". "<br />";
endforeach;

//then close php
?>