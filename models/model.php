<?php
include('database.php'); // Include relevant files
include('validation.php');



class Model extends Database {

	public function checkAdmin() {
		if($_SESSION['admin'] != 'yes') {
			return false;
		} else {
			return true;
		}
	}
	public function validateLogin() {
		// Instantiate the validate object
		$validate = new validate();

		// Get data from the form inputs
		extract($_POST);
		// initialise array to store messages
		// validate username (required)
		$messages['usernameError'] = $validate -> checkName($username, true);
		// validate password (required)
		$messages['passwordError'] = $validate -> checkPassword($password, true);

		$errors = $validate -> checkErrors($messages);
		if ($errors) {
			// If there are any errors, return the array
			return $messages;
		} else {
			// Validate success!
			// Proceed with login
			return false;
		}
	}

	// This function will process a login attempt
	public function processLogin() {
		$result = $this -> checkLogin();
		if(!$result) {
			return false;
		} else {
			// add user details to session
			$_SESSION['username'] = $result['username'];
			$_SESSION['admin'] = $result['admin'];
			$_SESSION['userID'] = $result['userID'];

			//session has been created (user has been logged in) 
		}
	}



	public function processLogout() {
		unset($_SESSION['username']);
		unset($_SESSION['userID']);
		unset($_SESSION['admin']);
	}

	public function validateSendMessage() {
		// Instantiate the validate object
		$validate = new validate();

		// Get data from the form inputs
		extract($_POST);
		// initialise array to store messages
		$messages = array();

		// validate username (required)
		$messages['usernameError'] = $validate -> checkName($username, true);
		// validate message
		$messages['descriptionError'] = $validate -> checkAddress($message, true);
		// // validate email content
		$messages['emailError'] = $validate -> checkEmail($email, true);

		$errors = $validate -> checkErrors($messages);
		if ($errors) {
			// If there are any errors, return the array
			return $messages;
		} else {
			// Validate success!
			// Proceed with login
			return false;
		}
	}
}

?>