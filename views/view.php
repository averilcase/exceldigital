<?php

abstract class View {

	// declare class properties
	protected $pageInfo;
	protected $model;

	// receive page info and model object
	public function __construct($page_info,$model) {
		// Assign received values to the class properties
		$this -> page_info = $page_info;
		$this -> model = $model;
		//run the function that builds the page.
		$this -> display_page();
	}
	private function display_page() {
		$html = $this -> display_head();
		$html .= $this -> display_header();
		$html .= $this -> display_content();
		$html .= $this -> display_gallery();
		$html .= $this -> display_footer();
		echo $html;
	}

	private function display_head() {
		$html = '<!DOCTYPE html>' . "\n";
		$html .= '<html>' . "\n";
		$html .= '<head>' . "\n";
		$html .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
		$html .= '<meta charset="UTF-8">' . "\n";
		$html .= '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
		$html .= '<meta type="keywords" type="keyword" content="'.$this -> page_info['pageKeywords'].'" />' . "\n";
		$html .= '<meta type="description" type="description" content="'.$this -> page_info['pageDesc'].'" />' . "\n";
		$html .= '<title>'.$this -> page_info['pageTitle'].'</title>' . "\n";
		//Bootstrap
	    $html .= '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">' . "\n";
	    $html .= '<link rel="stylesheet" type="text/css" href="css/styles.css">' . "\n";
	    $html .= '<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet" type="text/css">' . "\n";
	    $html .= '<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">' . "\n";
		$html .= '</head>' . "\n";
		$html .= '<body>' . "\n";

		return $html;

		return $html;
	}

	private function display_header() {
		$html = '<nav class="navbar navbar-default">' . "\n";
		$html .= '<div class="container-fluid">' . "\n";
		// Brand and toggle get grouped for better mobile display
		$html .= '<div class="navbar-header">' . "\n";
		$html .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">' . "\n";
		$html .= '<span class="sr-only">Toggle navigation</span>' . "\n";
		$html .= '<span class="icon-bar"></span>' . "\n";
		$html .= '<span class="icon-bar"></span>' . "\n";
		$html .= '<span class="icon-bar"></span>' . "\n";
		$html .= '</button>' . "\n";
		$html .= '<a class="navbar-brand" href="index.php?page=home"><img src="./images/logo.png" alt="Excel logo"></a>' . "\n";
		$html .= '</div>' . "\n";

		// Collect the nav links, forms, and other content for toggling
		$html .= '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">' . "\n";
		$html .= '<ul class="nav navbar-nav">' . "\n";
		$html .= '<li class="active"><a href="index.php?page=home" accesskey="1">Home <span class="sr-only">(current)</span></a></li>' . "\n";
		$html .= '<li class="dropdown">' . "\n";
		$html .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>' . "\n";
		$html .= '<ul class="dropdown-menu" role="menu">' . "\n";
		$html .= '<li><a href="index.php?page=digital-cut-sheet-printing" accesskey="2">Digital Cut Sheet Printing</a></li>' . "\n";
		$html .= '<li><a href="index.php?page=digital-labels" accesskey="3">Digital Labels</a></li>' . "\n";
		$html .= '<li><a href="index.php?page=digital-wide-format" accesskey="4">Digital Wide Format</a></li>' . "\n";
		$html .= '</ul>' . "\n";
		$html .= '</li>' . "\n";
		$html .= '<li><a href="index.php?page=solutions" accesskey="4">Solutions</a></li>' . "\n";
		$html .= '<li><a href="index.php?page=contact" accesskey="5">Contact</a></li>' . "\n";
		$html .= '</ul>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</nav>' . "\n";
		

		return $html;

	}

	abstract protected function display_content();
	private function display_gallery() {
		$allImages = $this -> model -> getAllImages();

		// Carousel

		


		$html = '<div id="gallery">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h2>Product Gallery</h2>' . "\n";
		$html .= '<hr/>' . "\n";
		$html .= '<a name="gallery"></a>' . "\n";
		$html .= '<p>See samples of our work</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div id="carousel-example" class="carousel slide" data-ride="carousel">' . "\n";
		$html .= '<ol class="carousel-indicators">' . "\n";
		$html .= '<li data-target="#carousel-example" data-slide-to="0" class="active"></li>' . "\n";
		$html .= '<li data-target="#carousel-example" data-slide-to="1"></li>' . "\n";
		$html .= '<li data-target="#carousel-example" data-slide-to="2"></li>' . "\n";
		$html .= '</ol>' . "\n";

		$html .= '<div class="carousel-inner">' . "\n";
	

		$active = ' active';

		while( $image = $allImages->fetch_assoc() ) {

			$html .= '<div class="item'.$active.'">' . "\n";
			$html .= '<a href="#"><img src="'.$image['image'].'" alt="Placeholder image" /></a>' . "\n";
			$html .= '<div class="carousel-caption">' . "\n";
			$html .= '<h3>'.$image['headerCaption'].'</h3>' . "\n";
			$html .= '<p>'.$image['caption'].'</p>' . "\n";
			$html .= '</div>' . "\n";
			$html .= '</div>' . "\n";
			if( $active == ' active' ) { $active = '';}
			
		}



		$html .= '</div>' . "\n";

		$html .= '<a class="left carousel-control" href="#carousel-example" data-slide="prev">' . "\n";
		$html .= '<span class="glyphicon glyphicon-chevron-left"></span>' . "\n";
		$html .= '</a>' . "\n";
		$html .= '<a class="right carousel-control" href="#carousel-example" data-slide="next">' . "\n";
		$html .= '<span class="glyphicon glyphicon-chevron-right"></span>' . "\n";
		$html .= '</a>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div> ' . "\n";
		// Contact
		$html .= '<div id="contact-container">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<a href="index.php?page=contact">Contact us</a>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		return $html;
	}	

	private function display_footer() {
		$html = '<footer>' . "\n";
		$html .= '<div id="social-media">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' . "\n";
		$html .= '<h3>Let\'s Connect</h3>' . "\n";
		$html .= '<div id="large-icons">' . "\n";
		$html .= '<img src="./images/fb.png" alt="Facebook">' . "\n";
		$html .= '<img src="./images/twitter.png" alt="Twitter">' . "\n";
		$html .= '<img src="./images/linked.png" alt="LinkedIn">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div id="small-icons">' . "\n";
		$html .= '<img src="./images/fb.png" height="35" width="35" alt="Facebook">' . "\n";
		$html .= '<img src="./images/twitter.png" height="35" width="35" alt="Twitter">' . "\n";
		$html .= '<img src="./images/linked.png" height="35" width="35" alt="LinkedIn">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-3 col-md-3 col-sm-0 col-xs-0"></div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";

		$html .= '<div id="footer">' . "\n";
		$html .= '<div class="row">' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">' . "\n";
		$html .= '<img src="./images/logo-footer.png" alt="Excel logo">' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">' . "\n";
		$html .= '<p>' . "\n";
		$html .= 'Steve Matthews<br/>' . "\n";
		$html .= 'CEO<br/>' . "\n";
		$html .= '<a href="mailto:stevem@exceldp.co.nz">stevem@exceldp.co.nz</a>' . "\n";
		$html .= '</p>' . "\n";

		$html .= '<p>' . "\n";
		$html .= 'Dale Pfeiler<br/>' . "\n";
		$html .= 'Director<br/>' . "\n";
		$html .= '<a href="mailto:dalep@exceldp.co.nz">dalep@exceldp.co.nz</a>' . "\n";
		$html .= '</p>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<sub><i class="fa fa-copyright"></i> 2015 Excel Digital</sub>' . "\n";
		$html .= '<a href="index.php?page=login">Admin</a>' . "\n";
		$html .= '<a href="index.php?page=site-map">Site Map</a>' . "\n";
		$html .= '</footer>' . "\n";

		//jQuery (necessary for Bootstrap's JavaScript plugins) -->
		$html .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>' . "\n";
		//Include all compiled plugins (below), or include individual files as needed
		$html .= '<script src="bootstrap/js/bootstrap.min.js"></script>' . "\n";
		$html .= '</body>' . "\n";
		$html .= '</html>' . "\n";
		return $html;
	}



} // View class closing tag


?>