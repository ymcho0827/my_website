<?php
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$phone_number = $_POST['phoneNumber'];
$visitor_email = $_POST['email'];
$purchase_price = $_POST['price'];
$size = $_POST['size'];
$brand = $_POST['brand'];
$colour = $_POST['colour'];
$timesWorn = $_POST['timesWorn'];

if(empty($name)||empty($visitor_email))||empty($price))||empty($size)||empty($brand)||empty($colour)||empty($timesWorn))
{
	echo "Your name is required!"
	exit;
}	elseif(empty($visitor_email) {
	echo "Phone Number is required!"
	exit;
}	elseif(empty($price) {
	echo "Purchase Price is required!"
	exit;
}	elseif(empty($size) {
	echo "Size is required!"
	exit;
}	elseif(empty($brand) {
	echo "Brand/Store is required!"
	exit;
}	elseif(empty($colour) {
	echo "Colour is required!"
	exit;
}	elseif(empty($timesWorn) {
	echo "Times Worn is required!"
	exit;
}
$email_from = 'skyjjang1234@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
			"email address: $visitor_email\n".
			"Message:\n $message".
			
$to = "skyjjang1234@hotmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject, $email_body, $headers);

?>