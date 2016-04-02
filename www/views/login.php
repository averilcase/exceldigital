<?php
class LoginForm extends View {
	//called from the view; returns $html string
	

	public function display_content() {
		$html = '';
		// Login form
		include('models/forms.php');
		$forms = new forms($this -> model);
		//if the submit button has not been pushed, show the form
		if (!isset($_POST['submit-login'])) {
			$html .= $forms -> loginForm();
		} else {
			//if the submit button has been pushed, validate
			$messages = $this -> model -> validateLogin();
			//if valid, log the user in
			if($messages) {
				$html .= $forms -> loginForm($messages);
			} else {
				$valid = $this -> model -> checkLogin();
				if ($valid) {
					$this -> model -> processLogin();
					//Redirect to the homepage
					header('Location:index.php?page=admin');
				} else {
					$html .= '<p>Sorry login failed</p>';
				}
			}
		}

		return $html;

	} // displayContent end
} //class end
?>