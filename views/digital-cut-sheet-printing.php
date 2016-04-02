<?php

class DigitalCutSheetPrinting extends View {
	// Called from the view - returns $html string
	public function display_content() {
		
		$html = '<div class="jumbotron">' . "\n";
		$html .= '<div id="parallax-home" class="section">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h1 id="digital-heading">Digital Cut Sheet Printing</h1>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>We are always ahead of the pack in embracing new technology, all the while demanding premium quality in every print piece we produce.</p>' . "\n";
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
		$html .= '<h2>Digital Cut Sheet Printing Solutions</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<p>Our colour-matching technology is second-to-none, meaning you get a brand-perfect print product from us every time.</p>' . "\n";
		$html .= '<p>We also take pride in developing print solutions that are fit-for-purpose. We don’t believe in settling for second-best, and neither should you.</p> ' . "\n";
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
		$html .= '<p>We are transforming the print experience with bespoke solutions that build better brands</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 digital-content cutsheet-margin">' . "\n";
		$html .= '<p>Our print-on-demand capability will deliver efficiencies for your business. There’s no point paying for storage for bulk print runs that will be outdated before you can use every copy, when we can deliver small runs of collateral whenever you need them at no extra cost.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 digital-content cutsheet-margin">' . "\n";
		$html .= '<p>We are also experts at taking one concept and delivering it across multiple channels, using innovative print products and solutions to get the best from a single creative concept.</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		return $html;
	}




} // digital cut sheet closing tag


?>