<?php
$errors = '';
$myemail = 'david.stephen.leonard@gmail.com';

if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) 
{
	$errors .= "\n Error: all fields are required";
}

$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (filter_var($email,FILTER_VALIDATE_EMAIL) === false) 
{
    header('Location: http://localhost/SDWebCreations/default.html#contact&error=true');
	exit();
	//$errors .= "\n Error: Invalid email address";
}

if (empty($errors))
{
	$to = $myemail;
	$email_subject = "Contact form submission: $subject";
	$email_body = "You have received a new message. Here are the details:".
				  "\n\t Email: $email \n\t Message: \n\t $message";
	$headers = "From: $myemail\n";
	$headers .= "Reply-To: $email";

	mail($to,$email_subject,$email_body,$headers);

	//redirect
	header('Location: http://localhost/SDWebCreations/default.html#contact');
	exit();
}
?>
<!DOCTYPE HTML > 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>