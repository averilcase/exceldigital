<?php

class  forms {
	
	public $model;
	// Some forms may require access to the database, so it could be handy to the have the model available
	public function __construct($model) {
		$this -> model = $model;
	}
	
	

	// This function returns a login form
	public function loginForm($messages='') {
			$form = '';
			$username = '';
			$usernameError = '';
			$passwordError = '';

			// If the user has submitted the form
			if( isset($_POST['username']) ) {
				$username = $_POST['username'];
			} else {
				$username = '';
			}


		if($messages) {
			extract($messages);
		}

			$form .= '<div id="login-container">' . "\n";


			$form .= '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '">' . "\n";
			// Input for username
			$form .= '<div>' . "\n";
			$form .= '<label class="sr-only" for="name">Name</label>' . "\n";
			$form .= '<input type="text" name="username" id="username" placeholder="Name" value="'.$username.'" />' . "\n";
			$form .= '<span class="error">'.$usernameError.'</span>';
			$form .= '</div>' . "\n";
			// Input for password
			$form .= '<div>' . "\n";
			$form .= '<label class="sr-only" for="password">Password</label>' . "\n";
			$form .= '<input type="password" name="password" id="password" placeholder="Password" />' . "\n";
			$form .= '<span class="error">'.$passwordError.'</span>';
			$form .= '</div>' . "\n";

			// Submit button
			$form .= '<input type="submit" name="submit-login" id="submit-login" value="Login" />' . "\n";
			$form .= '</form>' . "\n";
			$form .= '</div>' . "\n";
			
			return $form;
	}
	// Excel Contact form
	public function contactExcel($messages='') {
		$usernameError ='';
		$emailError = '';
		$messageValue = '';
		$descriptionError = '';

		if($messages) {
			extract($messages);
		}

		$form = '<form method="post" action="'.$_SERVER['REQUEST_URI'].'">' . "\n";
		$form .= '<div class="form-group">' . "\n";
		$form .= '<label class="sr-only" for="name">Full Name</label>' . "\n";
		$form .= '<input type="text" class="form-control" id="username" name="username" placeholder="Full Name">' . "\n";
		$form .= '<span class="error">'.$usernameError.'</span>';
		$form .= '</div>' . "\n";
		$form .= '<div class="form-group">' . "\n";
		$form .= '<label class="sr-only" for="email">Email address</label>' . "\n";
		$form .= '<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">' . "\n";
		$form .= '<span class="error">'.$emailError.'</span>';
		$form .= '</div>' . "\n";
		$form .= '<div class="form-group">' . "\n";
		$form .= '<label class="sr-only">Put me in touch with:</label>' . "\n";
		$form .= '<select class="form-control" name="enquiry">' . "\n";
		$form .= '<option disabled value="Put me in touch with..." selected>Put me in touch with...</option>' . "\n";
		$form .= '<option value="General Enquiry">General enquiry</option>' . "\n";
		$form .= '<option value="Message a print expert">Message a print expert</option>' . "\n";
		$form .= '<option value="Message a label expert">Message a label expert</option>' . "\n";
		$form .= '</select>' . "\n";
		$form .= '<div>' . "\n";
		$form .= '<span></span>' . "\n";
		$form .= '</div>' . "\n";
		$form .= '</div>' . "\n";
		$form .= '<div>' . "\n";
		$form .= '<textarea class="form-control" rows="10" id="address" placeholder="Enter Message..." name="message">'.$messageValue.'</textarea>' . "\n";
		$form .= '<span class="error">'.$descriptionError.'</span>';
		$form .= '</div>' . "\n";
		$form .= '<input type="submit" id="send-message" name="send-message" value="Send Message">' . "\n";
		$form .= '</form>' . "\n";
	
		return $form;
	}
		//Delete image prompt
		public function deleteImage($image) {
		$image = $this -> model -> getImage($_GET['imageID']);
			 $form = '<div id="confirm-delete">' . "\n";
			 $form .= '<h5>Are you sure you want to delete the '.$image['image'].' image?</h5>' . "\n";
			 $form .= '<form class="form-layout" method="post" action="' . $_SERVER['REQUEST_URI'] . '">' . "\n";
			 $form .= '<input type="submit" name="reject-delete" id="reject-delete" value="No Way!"/>' . "\n";
			 $form .= '<input type="submit" name="confirm-delete" id="delete-news" value="Delete Me"/>' . "\n";
			 $form .= '</form>' . "\n";
			 $form .= '</div>' . "\n";

			 return $form;
	}

		public function editImageCaption( $caption, $headerCaption ) {
			$result = $this -> model ->getImage($_POST['image']);
			$form = '<form action="index.php?page=admin" method="post" enctype="multipart/form-data">' . "\n";
			$form .= '<h3>Edit Image Text</h3>' . "\n";
	   		$form .= '<input type="file" name="fileToUpload" id="fileToUpload">' . "\n";
	   		$form .= '<input type="submit" value="Upload Image" name="edit-image">' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for="header-caption">Header Caption</label>' . "\n";
	   		$form .= '<input type="text" id="header-caption" name="header-caption" value="'.$headerCaption.'">' . "\n"; 
	   		$form .= '<div>' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for=caption>Caption</label>' . "\n";
	   		$form .= '<input type="text" id="caption" name="caption" value="'.$caption.'">' . "\n"; 
	   		$form .= '<div>' . "\n";
	   		$form .= '<hr/>' . "\n";
   			return $form;
	}


		// caption form
		public function addImageCaption( $caption, $headerCaption ) {
			$result = $this -> model ->getImage($_POST['image']);
			$form = '<form action="index.php?page=admin" method="post" enctype="multipart/form-data">' . "\n";
			$form .= '<h3>Add Image Text</h3>' . "\n";
	   		$form .= '<input type="file" name="fileToUpload" id="fileToUpload">' . "\n";
	   		$form .= '<input type="submit" value="Upload Image" name="add-image-text">' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for="header-caption">Header Caption</label>' . "\n";
	   		$form .= '<input type="text" id="header-caption" name="header-caption" value="'.$headerCaption.'">' . "\n"; 
	   		$form .= '<div>' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for=caption>Caption</label>' . "\n";
	   		$form .= '<input type="text" id="caption" name="caption" value="'.$caption.'">' . "\n"; 
	   		$form .= '<div>' . "\n";
	   		$form .= '<hr/>' . "\n";
   			return $form;

				}
		
		//upload image form
		public function addImage() {
			
			$form = '<form action="index.php?page=admin" method="post" enctype="multipart/form-data">' . "\n";
			$form .= '<h3>Add Image</h3>' . "\n";
	   		$form .= '<input type="file" name="fileToUpload" id="fileToUpload">' . "\n";
	   		$form .= '<input type="submit" value="Upload Image" name="add-image">' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for="header-caption">Header Caption</label>' . "\n";
	   		$form .= '<input type="text" id="header-caption" name="header-caption">' . "\n"; 
	   		$form .= '<div>' . "\n";
	   		$form .= '<div>' . "\n";
			$form .= '<label for=caption>Caption</label>' . "\n";
	   		$form .= '<input type="text" id="caption" name="caption">' . "\n"; 
	   		$form .= '<div>' . "\n";
			$form .= '</form>' . "\n";
			$form .= '<hr/>' . "\n";
			return $form;
		}

	
}

?>