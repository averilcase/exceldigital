<?php

class Home extends View {
	// Called from the view - returns $html string
	public function display_content() {
		
		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-home" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1>Excel Digital</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>We are your full service digital solution provider.</p>' . "\n";
		$html .= '<a href="#gallery">See our gallery</a>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";


		$html .= '<div id="main-content">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-left" src="./images/bubbles-left.png" alt="Bubble illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">' . "\n";
		$html .= '<h2>Welcome to Excel</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>With our unique mix of commercial expertise, marketing savvy and technical know-how we will help you talk to your audience more effectively.</p>' . "\n";
		$html .= '<p>We will work with you to understand your communication challenge and then to find the best solution to deliver the results you\'re seeking.</p> ' . "\n";

		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-right" src="./images/bubbles-right.png" alt="Bubble illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div id="home-content">' . "\n";
		$html .= '<div class="row purple-spacing">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">' . "\n";
		$html .= '<h2>Digital Solutions</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Contact the team at Excel. We promise to delight you.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 service-panels">' . "\n";
		$html .= '<ul>' . "\n";
		$html .= '<li>Experts in developing effective communication solutions</li>' . "\n";
		$html .= '<li>Solutions scaled to suit every sized business</li>' . "\n";
		$html .= '<li>Decades of experience</li>' . "\n";
		$html .= '</ul>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 service-panels">' . "\n";
		$html .= '<ul>' . "\n";
		$html .= '<li>Committed to investing in new technologies to benefit our clients</li>' . "\n";
		$html .= '<li>Streamlined processes that deliver cost-efficiencies</li>' . "\n";
		$html .= '<li>Strategy, creative, and delivery expertise under one roof</li>' . "\n";
		$html .= '</ul>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";




		return $html;
	}




} // home class closing tag


?>