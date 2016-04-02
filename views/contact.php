<?php

class Contact extends View {
	// Called from the view - returns $html string
	public function display_content() {
	
	include('models/forms.php');
		// Contact form
		$forms = new forms($this -> model);
		
		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-contact" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1>Get In Touch</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p> Have something you would like to discuss? Well give us a ring, send us an email, or fill out the form below </p>' . "\n";
		$html .= '<a href="#location">See Our Location</a>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";


		$html .= '<div id="main-content">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-left" src="./images/bubbles-left.png" alt="Bubbles illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">' . "\n";
		$html .= '<h2>Contact us</h2>' . "\n";
		$html .= '<hr/>' . "\n";

		
			

			//If the user has not yet submitted the form, display it
			if(!isset($_POST['send-message'])) { 			
			// Call the contactForm funtion from the forms class
				$html .= $forms -> contactExcel();
				} else {
				// run the validation function
				$messages = $this -> model -> validateSendMessage();

				if($messages) {
					// validation failed, display the form
					$html .= $forms -> contactExcel($messages);
				} else {

					mail('averil.case@gmail.com', $_POST['enquiry'],$_POST['message']);

					echo 'message sent';

					}
				}


		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-right" src="./images/bubbles-right.png" alt="Bubbles illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div id="home-content">' . "\n";
		$html .= '<div class="row purple-spacing">' . "\n";
		$html .= '<a name="location"></a>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">' . "\n";
		$html .= '<h2>Location</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 address">' . "\n";
		$html .= '<p>Address:<br/> 21 Jamaica Drive,<br/>' . "\n";
		$html .= 'Grenada North,<br/>' . "\n";
		$html .= 'Wellington</p>' . "\n";
		$html .= '<p>Telephone:<br/> +64 4 499 0912</p>' . "\n";
		$html .= '<p>Fax:<br/> +64 4 499 0918</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">' . "\n";
		$html .= '<div id="map-canvas"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= ' <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>' . "\n";
		$html .= '<script src="js/map.js"></script>' . "\n";
			

		return $html;
	}

	

} // contact class closing tag


?>