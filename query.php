<?php
ob_start("ob_gzhandler");
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['phone'];
$des = $_POST['Message'];


$to = 'info@aaagrisolutions.com';
$from_email = $email;
$headers = "From: "."$email"."\n";
//$headers .= "Bcc: anand.webmaster83@gmail.com\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$subject='Enquiry by '.$name.'!!!';


$mailmessage="Dear Sir, ";
$mailmessage.="<br><br>Name 	: $name";
$mailmessage.="<br>Email ID 	: $email";
$mailmessage.="<br>Phone No 	: $phone";
$mailmessage.="<br>Description 	: $des";

$mailmessage.="<br><br>Thanks & Regards\n";
$mailmessage.="<br>$name";
$response = @mail($to, $subject, $mailmessage, $headers);

if($response){
print '<script type="text/javascript">';
print 'alert("Thanks, Our representaives will contact you shortly ")'; 
print '</script>'; 
header("Location:index.php");
	}
else
{
print '<script type="text/javascript">';
print 'alert("OOPS !!! It seems that there are overload concerns with the server.)';
print '</script>'; 
	header("Location:index.php");
	}
?>
