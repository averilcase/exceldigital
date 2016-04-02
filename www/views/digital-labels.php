<?php

class DigitalLabels extends View {
	// Called from the view - returns $html string
	public function display_content() {
		
		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-home" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1>Excel Labels</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Our Digital Label offering builds on our capability and expertise in fit-for-purpose, cost-effective print solutions.</p>' . "\n";
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
		$html .= '<h2>Digital Labels</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Using our state-of-the-art digital technology we’re able to provide top-quality label solutions. We will print labels at the numbers you need exactly when required. What’s more, our smart production method allows us to maintain competitive unit pricing, usually possible only with high-volume bulk orders.</p>' . "\n";
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
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 digital-content">' . "\n";
		$html .= '<p>Ordering the required style and quantity of labels couldn’t be easier with Excel. With our online ordering system, you can manage the editing, ordering and reordering of your labels from us.</p>' . "\n";
		$html .= '<p>Regardless of your industry, packaging type, or size, we’re confident we can develop a quality solution for you.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5">' . "\n";
		$html .= '<img src="http://placehold.it/500x294" alt="Placeholder image">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		return $html;
	}




} // digital labels class closing tag


?>