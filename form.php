<html>
<body>
<?php
	if($_POST["name"]=="" || $_POST["phone"]=="" || $_POST["e-mail"]=="" || $_POST["admin"]=="")
		echo "<strong>please enter all details</strong>";
	else{
	echo "Hola! </br><strong>";
	echo $_POST["name"];
	echo " ,</strong></br></br>your registred phone no. is</br><strong>";
	echo $_POST["phone"];
	echo "</strong></br> and e-mail </br><strong>";
	echo $_POST["e-mail"];
	echo "</strong></br></br>your details are saved.";
	
	$myfile = fopen("‪data.txt","a");
	fwrite($myfile, $_POST["name"]);
	fwrite($myfile, ", ");;
	fwrite($myfile, $_POST["admin"]);
	fwrite($myfile, ", ");
	fwrite($myfile, $_POST["phone"]);
	fwrite($myfile, ", ");
	fwrite($myfile, $_POST["e-mail"]);
	fwrite($myfile, "\n");
	
	$ToEmail = "prateek.mittal156@gmail.com"; 
    $EmailSubject = "Site contact form"; 
    $mailheader = "From: ".$_POST["e-mail"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["e-mail"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["e-mail"]."";
	
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
	
	echo "<i></br>now you can do whatever you want to do man.!!";
	}
?>
</body>
</html>