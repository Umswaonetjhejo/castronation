<?php
 
if(isset($_POST['submit'])) 
{
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@castronation.co.za";
 
    $email_subject = "Comment from Website visitors.";
     
     
    // validation expected data exists
 
    if(!isset($_POST['first_name']) || !isset($_POST['cell']) || !isset($_POST['email_address']) || !isset($_POST['city']) || !isset($_POST['comments'])) 
	{
        $error_message .= 'Please fill in all the text boxes!!!';       
    }
     
    $first_name = $_POST['first_name']; // required
	
	$phone_no = $_POST['cell']; // required
 
    $email_from = $_POST['email_address']; // not required
	
	$city = $_POST['city']; // not required
 
    $comments = $_POST['comments']; // required
  
    $error_message = "";
 
	$string_exp = "/^[A-Za-z .'-]+$/";
	 
	if(!preg_match($string_exp,$first_name)) 
	{
		$error_message .= 'The First Name you entered does not appear to be valid!!!<br />';
	}

	if(!is_numeric($phone_no))
	{
		$error_message .= 'Please make sure the cellphone number is numeric!!!<br />';
	}

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	if(!preg_match($email_exp,$email_from)) 
	{
		$error_message .= 'The Email Address you entered does not appear to be valid!!!<br />';
	}

	if(!preg_match($string_exp,$city)) 
	{
		$error_message .= 'The City Name you entered does not appear to be valid!!!<br />';
	}

	if(strlen($comments) < 2) 
	{
		$error_message .= 'The Comments you entered does not appear to be valid!!!<br />';
	}

	if(strlen($error_message) > 0) 
	{
		print '<div class="row">
					<div class="col-md-3">

					</div>
					<div class="col-md-6">
						<div class="alert alert-danger">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>'
							.$error_message.
						'</div>
					</div>
					<div class="col-md-3">

					</div>
				</div>';
	}

	if(!$error_message)
	{
		print '<div class="row">
					<div class="col-md-3">

					</div>
					<div class="col-md-6">
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
							Your message submited successfuly
						</div>
					</div>
					<div class="col-md-3">

					</div>
				</div>';
	}
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) 
	{
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return $email_message .= str_replace($bad,"",$string);
    }
 
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
	
	$email_message .= "Surname: ".clean_string($phone_no)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
	
	$email_message .= "City: ".clean_string($city)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
	// create email headers
	 
	$headers = 'From: '.$email_from."\r\n".
	 
	'Reply-To: '.$email_from."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	mail($email_to, $email_subject, $email_message, $headers);  
}
?>
 