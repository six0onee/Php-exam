<?php 

include("function.php");

$hideForm = 0;	//Don't hide form if nothing sent

if (count($_POST) > 0) // Check if data were sent
{

	if (isset($_POST["contact"])) // Check if the contact form is sent
	{
		
		//Store post var
		$lastname = trim(strip_tags($_POST["lastname"]));
		$firstname = trim(strip_tags($_POST["firstname"]));
		$email = trim(strip_tags($_POST["email"]));
		$message = trim(strip_tags($_POST["message"]));

		//Data verification
		//Create an array error
		$errors = array();
		//lastname verification
		if (!isOnlyLetter($lastname)) {
			$errors['lastname'] = "Votre nom semble bizarre... Veuillez réessayer.";
		}
		//Firstname verification
		if (!isOnlyLetter($firstname)) {
			$errors['firstname'] = "Votre nom semble bizarre... Veuillez réessayer.";
		}
		//Email verification
		if (!isEmailValid($email)) {
			$errors['email'] = "Veuillez entrer une adresse email valide.";
		}
		//Message verification
		if (!strlen($message)) {
			$errors['message'] = "Vous ne m'écrivez rien ?";
		}

		//If no error was made
		if (count($errors) == 0) 
		{
			//Testé en ligne, fonctionne
				//Sending msg by mail
				$to = "antoine.gouin.61@gmail.com";
				$subject = $lastname." ".$firstname." sent you a msg ! His email adresse is ".$email;
				$msg = $message;
        		$headers .= 'From: tfe@dwm.com' . "\r\n";
				mail($to, $subject, $msg, $headers);
			//
			//HideForm and create status
			$hideForm = 1;
			$statuscontact = "Merci pour votre message, il a bien été envoyé.";			
		}else //Error happenned !
		{
			$statuscontact = "Une erreur est survenue, veuillez vérifier et corriger.";
		}
	}
}
	


 ?>