<?php	
	if(empty(htmlspecialchars($_POST['name'])) && strlen(htmlspecialchars($_POST['name'])) == 0 || empty(htmlspecialchars($_POST['email'])) && strlen(htmlspecialchars($_POST['email'])) == 0 || empty(htmlspecialchars($_POST['input_504'])) && strlen(htmlspecialchars($_POST['input_504'])) == 0 || empty(htmlspecialchars($_POST['message'])) && strlen(htmlspecialchars($_POST['message'])) == 0)
	{
		return false;
	}
	
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$input_504 = htmlspecialchars($_POST['input_504']);
	$message = htmlspecialchars($_POST['message']);
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $input_504 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_504";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>