<?php
//---------------------------------------------------------------------------------
//ProjectName:  rrespino.com
//
//ModuleName: about.php
//
//Purpose:  This is the initial landing page that is first
//		 	presented to the user
//
//Copywright 2017 &copy;
//Ronald R Espinoza | admin@rrespino.com 
// All rights reserved 	
//=================================================================================
//
//Includes:  	*.php	
//			MasterController.php
//			aboutBody.php
//
//
//Functions:	
//
//
//Edits and Profreading done
// by:___________________  Date:__|__|__
//	 Note:_____________________________________
//
//
//---------------------------------------------------------------------------------

//including the necessary libraries
include_once './Includes/RR_Utils.php';
include_once './Includes/RR_Var.php';

//instantiating the necessary classes
$aUtil = new RR_Utils();	
$aVar = new RR_Var();

if (isset($_POST["submit"])) {
	
	//retrieving proper post variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$human = ($_POST['human']);
	$from = 'rrespino Contact Form'; 
	$to = 'ronnieespinoza@comcast.net'; 
	$subject = 'Message from portfolio contact form';
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	// Check if name has been entered
	if (!$name) {
		$aVar->setErrName('Please enter your name');
	}
	
	// Check if email has been entered and is valid
	if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$aVar->setErrEmail('Please enter a valid email address');
	}
	
	//Check if message has been entered
	if (!$message) {
		$aVar->setErrMessage('Please enter your message');
	}
	//Check if simple anti-bot test is correct
	if ($human != "Ohms Law V=I*R ".date(i)) {
		$aVar->setErrHuman('Your anti-spam is incorrect');
	}

	// If there are no errors, send the email
	if (!$aVar->getErrName() && !$aVar->getErrEmail() && !$aVar->getErrMessage() && !$aVar->getErrHuman()) {
		if (mail ($to, $subject, $body, $from)) {
			$aVar->setResult('<div class="alert alert-success">Thank You! I will be in touch</div>');
		} else {
			$aVar->setResult('<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>');
		}
	}
}

//include the pages body
include "Views/contactBody.php";
//include the sites main controller
include "MasterController.php";



?>
