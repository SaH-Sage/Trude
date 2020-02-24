<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];	
	$regarding = $_POST['name'];	
	$ability = $_POST['ability'];	
	$message = $_POST['message'];	
	$emailFrom = $_POST['email'];	

	$mailTo = "sondrealexander@hotmail.com"
	$headers = "Fra: ".$emailFrom;
	$subject = "Trude-Ski - Angående: ".$regarding;
	$txt = "Du har fått en e-post fra ".$name.".\n\n".$message; 

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend"); 
}
