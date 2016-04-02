<?php

class DigitalWideFormat extends View {
	// Called from the view - returns $html string
	public function display_content() {

		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-home" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1 id="digital-heading">Digital Wide Format</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Our newest addition is our Digital Wide Format Print and Cutting table solution.</p>' . "\n";
		$html .= '<a href="#gallery">See our gallery</a>' . "\n";
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
		$html .= '<h2 id="wide-format-heading">Digital Wide Format Print and Cutting table solution</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>The ultimate platform to provide short run solutions to the display and packaging markets.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-right" src="./images/bubbles-right.png" alt="Bubbles illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div id="home-content">' . "\n";
		$html .= '<div class="row purple-spacing">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">' . "\n";
		$html .= '<h2>Digital Solutions</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 digital-content">' . "\n";
		$html .= '<p>From folding cartons and sample boxes to display stands and document folders all printed with your brand and messaging.</p>' . "\n";
		$html .= '<p>Create your concepts before going into full production without the heavy setup cost of more traditional processes.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">' . "\n";
		$html .= '<img src="http://placehold.it/500x265" alt="Placeholder image">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		return $html;
	}




} // digital wide format class closing tag


?>