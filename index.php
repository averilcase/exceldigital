<?php 
// Include the master view
include('views/view.php');
// intitialise user session
session_start();
session_regenerate_id(); // regenerate user id

// Instantiate the model
include('models/model.php'); // Instantiate relevant files
$model = new Model(); // Declare model object

// Get page info
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

$page_info = $model -> get_page_info($page); // Returns page info

// Instantiate relevant view through switch
switch($page) {
	case 'home':
		include('views/home.php');
		new Home($page_info,$model);
		break;
	case 'contact':
		include('views/contact.php');
		new Contact($page_info,$model);
		break;
	case 'login':
		include('views/login.php');
		new LoginForm($page_info,$model);
		break;
	case 'logout':
		include('views/logout.php');
		new Logout($page_info,$model);
		break;
	case 'solutions':
		include('views/solutions.php');
		new Solutions($page_info,$model);
		break;
	case 'digital-cut-sheet-printing':
		include('views/digital-cut-sheet-printing.php');
		new DigitalCutSheetPrinting($page_info,$model);
		break;
	case 'digital-labels':
		include('views/digital-labels.php');
		new DigitalLabels($page_info,$model);
		break;
	case 'digital-wide-format':
		include('views/digital-wide-format.php');
		new DigitalWideFormat($page_info,$model);
		break;
	case 'admin':
		include('views/admin.php');
		new Admin($page_info,$model);
		break;
	case 'site-map':
		include('views/site-map.php');
		new SiteMap($page_info,$model);
		break;
}

?>