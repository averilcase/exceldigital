<?php
class Logout extends View {
	//called from the view; returns $html string
	public function display_content() {
	
	$html = '';

	// Does the user want to logout?
		if($_GET['page'] == 'logout') {
			// process the logout
			$this -> model -> processLogout();
			// Show the login form
			header( "refresh:1; url=index.php?page=home" ) ;
			echo "logging user out";
		}


		return $html;
	}
	
}
?>