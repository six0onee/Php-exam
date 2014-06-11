<?php 

//Is valide email
	function isEmailValid($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}
//End Is valide email


//Is only letter value
	function isOnlyLetter($string){
		if (preg_match('#^[A-Za-zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]+$#', $string))
		{
		    return true;
		}
	}
//End Is only letter value

 ?>