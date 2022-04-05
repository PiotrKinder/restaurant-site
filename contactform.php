<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "restauracjaarizona@wp.pl";
	$headers = "Od: ".$mailFrom;
	$txt = "Otrzymałeś wiadomość od ".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: dziekujemy-za-kontakt");
}
