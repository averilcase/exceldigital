<?php

class Solutions extends View {
	// Called from the view - returns $html string
	public function display_content() {
		
		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-solutions" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1>Excel Solutions</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Find out how we work by following our unique Digital Solution Pathway.</p>' . "\n";
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
		$html .= '<h2>Digital Solution Pathways</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p> Our unique Digital Solution Pathway offers clients a robust, tested and transparent process for assessing their needs and finding an integrated solution that is cost effective, future-proof, and delivers results.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-2 col-xs-0">' . "\n";
		$html .= '<img id="bubbles-right" src="./images/bubbles-right.png" alt="Bubbles illustration">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div id="solutions-content">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">' . "\n";
		$html .= '<h2>There are four key steps on the Pathway–</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 solutions" id="step1">' . "\n";
		$html .= '<p>Consultation</p>' . "\n";

		$html .= '<img src="./images/step1.png" alt="Consultation graphic">' . "\n";
		$html .= '<p class="solutions-pathway">We get to know your business, the environment you work in and your challenges.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 solutions" id="step2">' . "\n";
		$html .= '<p>Solution</p>' . "\n";
		$html .= '<img src="./images/step2.png" alt="Solution graphic">' . "\n";
		$html .= '<p class="solutions-pathway">We apply our marketing and communication expertise to your challenge and devise a solution that will drive the results you\'re seeking.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 solutions" id="step3">' . "\n";
		$html .= '<p>Delivery</p>' . "\n";
		$html .= '<img src="./images/step3.png" alt="Delivery graphic">' . "\n";
		$html .= '<p class="solutions-pathway">We use our best-in-class technology and commitment to enhancing your brand to bring your tailored solution to life.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 solutions" id="step4">' . "\n";
		$html .= '<p>Analysis</p>' . "\n";
		$html .= '<img src="./images/step4.png" alt="Analysis graphic">' . "\n";
		$html .= '<p class="solutions-pathway">We critically review the campaign results and find future opportunities to support your business to improve its communication.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";


		return $html;
	}




} // solutions class closing tag


?>