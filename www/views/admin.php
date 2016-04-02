<?php

class Admin extends View {
	// Called from the view - returns $html string
	public function display_content() {

		 $html = '';

		include('models/forms.php');
		
		$forms = new forms($this -> model);

		$admin = $this -> model -> checkAdmin();
		// Check if user is Admin - if no refresh to homepage
		if($_SESSION['admin'] == 'no') {
			header("Location: index.php?page=home");
		}
			if (isset($_POST['submit'])) {
				print_r($_POST);
				if (isset($_POST['setting']) && $_POST['setting'] == 'Delete' ) {
					$this -> model -> deleteImage();
					unlink($_POST['image']);
				}
				if (isset($_POST['setting']) && $_POST['setting'] == 'Edit') {

					// Get the header caption and regular caption from database
					 $result = $this -> model -> getImage($_POST['image']);
					
					



					// Send the captions to the form
					$html .= $forms -> editImageCaption($result['caption'],$result['headerCaption']);
				}
			}
			// Add images to gallery
			if(isset($_POST['add-image']) && $_FILES['fileToUpload']['name'] != '') { 			
			
			require 'models/uploadImage.php';
			$uploader = new upload('fileToUpload',['image/jpeg', 'image/gif', 'image/png'], 'images/slider');
			$result = $uploader -> isUploaded();

			// If successful
			if( $result['success'] ) {

				// Insert the new image name into the database
				$imageLocation = $result['filepath'];
				$this -> model -> addImage($imageLocation);




			}

				}

		$html .= $forms -> addImage();
	
	

		$image = $this -> model -> getAllImages();
		$html .= '<form action="index.php?page=admin" method="post">' . "\n";

		foreach($image as $img) {

			$html .= '<div>' . "\n";
			$html .= '<input type="radio" name="image" id="'.$img['image'].'" value="'.$img['imageID'].'">' . "\n";
			$html .= '<label for="'.$img['image'].'"><img width="120" src="'.$img['image'].'"></label>' . "\n"; 
			$html .= '</div>' . "\n";
		}

		$html .= '<hr/>' . "\n";
		$html .= '<input type="radio" id="edit" name="setting" value="Edit">' . "\n";
		$html .= '<label for="edit">Edit Image</label>' . "\n";
		$html .= '<input type="radio" id="delete" name="setting" value="Delete">' . "\n";
		$html .= '<label for="delete">Delete Image</label>' . "\n";
		$html .= '<div>' . "\n";
		$html .= '<input type="submit" value="Submit" name="submit"/>' . "\n";
		$html .= '</div>' . "\n";
		$html .= '<form><br/>' . "\n";

		$html .= '<br/>' . "\n";

		$html .= '<a href="index.php?page=logout">Logout</a>' . "\n";

	


		return $html;
	}

	


} // home class closing tag


?>