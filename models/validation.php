<?php

class validate {
	
	/*
	This function will receive an array of messages, eg:
	
	$messages[firstNameError] = Please enter your name
	$messages[lastNameError] = Please enter your name
	
	We need to loop through them all to if there are messages, or if it's just a series of blanks
	*/
	public function checkErrors($messages) {
		$errors = false;
		foreach($messages as $message) {
			if($message) {
				// If there is even one message, we have errors
				$errors = true;
			}
		}
		return $errors;
	}
	
	/*
	All of the following functions receive something to validate, and a value to indicate whether or not it is required. If the value is required but is not present, we need to tell the user to enter the value. However, if they enter something, we would still like to validate even if it is not required.
	*/
	
	public function checkName($username, $required) {
		if($required && !$username) {
			return 'Please enter your name';
		} else {
			$pattern = '/^[a-zA-Z-\'\. ]{2,20}$/';
			if(!preg_match($pattern, $username)) {
				return 'Please enter your name correctly';
			} else {
				return false;
			}
		}
	}

public function checkPassword($password, $required) {
		if($required && !$password) {
			return 'Please enter your password';
		} else {
			$pattern = '/^[a-z0-9_-]{4,18}$/';
			if(!preg_match($pattern, $password)) {
				return 'Please enter your password correctly';
			} else {
				return false;
			}
		}
	}

	public function checkTitle($title, $required) {
		if($required && !$title) {
			return 'Please enter a title';
		} else {
			$pattern = '/^[a-zA-Z-\'\. ]{2,20}$/';
			if(!preg_match($pattern, $title)) {
				return 'Please enter a title correctly';
			} else {
				return false;
			}
		}
	}


		public function checkEnquiry($enquiry, $required) {
		if($required && !$enquiry) {
			return 'Please enter your message';
		} else {
			$pattern = '/^[a-zA-Z-\'\. \"]{2,300}$/';
			if(!preg_match($pattern, $enquiry)) {
				return 'Please enter the message correctly';
			} else {
				return false;
			}
		}
	}

	
	
	public function checkEmail($emailAddress, $required) {
		if($required && !$emailAddress) {
			return 'Please enter your email address';
		} else {
			$pattern = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.(([0-9]{1,3})|([a-zA-Z]{2,3})|(aero|coop|info|museum|name))$/';
			if(!preg_match($pattern, $emailAddress)) {
				return 'Please enter your email address correctly';
			} else {
				return false;
			}
		}
	}

	public function checkAddress($address, $required) {
		if($required && !$address) {
			return 'Please enter your postal address';
		} else {
			$pattern = '/^[a-zA-Z-\'\. \"]{2,60}$/';
			if(!preg_match($pattern, $address)) {
				if(!$required) {
					return false;
				}
				return 'Please enter your postal address correctly';
			} else {
				return false;
			}
		}
	}



	
	public function checkFile($file, $required) {
		if($required && $file['error'] == 4) {
			return 'Please select a file to upload';
		} else {
			return false;
		}
		// At this point you may also want to check the filename or possible the file type
	}
	
	
}

?>