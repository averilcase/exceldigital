<?php

class SiteMap extends View {
	// Called from the view - returns $html string
	public function display_content() {
		$html = '';
		$html .= '<table style="width:40%">' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Sitemap</td>' . "\n";
		$html .= '<td>Access Key:</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Home</td>' . "\n";
		$html .= '<td>1</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Digital Cut Sheet Printing</td>' . "\n";
		$html .= '<td>2</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Digital Labels</td>' . "\n";
		$html .= '<td>3</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Digital Wide Format</td>' . "\n";
		$html .= '<td>4</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Solutions</td>' . "\n";
		$html .= '<td>5</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '<tr>' . "\n";
		$html .= '<td>Contact</td>' . "\n";
		$html .= '<td>6</td>		' . "\n";
		$html .= '</tr>' . "\n";
		$html .= '</table>' . "\n";


		return $html;
	}





} // home class closing tag


?>