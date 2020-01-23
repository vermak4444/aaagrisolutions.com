<?php

echo $name=$_POST['Name'];
echo $email=$_POST['Email'];
echo $phone=$_POST['phone'];
echo $msg=$_POST['Message'];
$to  = "shriankita1@gmail.com" . ","; // note the comma
echo $to .= "shriankita1@gmail.com";
$message=
"<html>
<head>
  <title></title>
</head>
<body>
  <p>Hey sir/mam</p>
	<p>I am ".$name."</p> 
	<p>I want to enquiry for ".$msg."</p>
	<p>And my Phone number is </p><strong>".$phone."</strong><p>for confirmation.</p>
</body>
</html>
";

$subject = "Enquiry for this site";

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

// Additional headers
$headers .= "To: heera<shriankita1@gmail.com>" . "\r\n";
$headers .= "From:" . $email. "\r\n";
$headers .= "Cc: ". $email. "\r\n";
$headers .= "Bcc:" . $email. "\r\n";

// Mail it
try
{
	//mail($to, $subject, $message, $headers);
	echo "mail has been send";
}
catch(exception $e)
{
	echo $e;
}

//header('location:packagedetails.php?mail=success');
?> 
