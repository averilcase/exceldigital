<?php
/*

This class will receive the name of a file input, an array of valid file types and the path to a folder where the uploaded file should be stored.

The function 'isUploaded' will return true or false depending on whether or not the file was uploaded. However, there are many errors that can occur when uploading, so we need to return a message as well. 
We will return an array which will include the result (yes/no) and a message, eg:

['success'] = false;
['message'] = 'Please upload an image file';

OR

['success'] = true;
['filepath'] = 'uploads/product.jpg';
['message'] = 'File uploaded successfully';

*/

class upload {

	//declare class properties
	private $inputName; // The name of the input in the form
	private $okTypes; // An array of valid file types
	private $folder; // The path to the destination folder

	public function __construct($inputName,$okTypes,$folder) {
		//Assign values to class properties
		$this -> okTypes = $okTypes;
		$this -> inputName = $inputName;
		$this -> folder = $folder;
	}

	public function isUploaded() {
		//Initialise the result array
		$result = array(); // this array will collect info throughout the function

		//check the error type
		if($_FILES[$this -> inputName]['error']) {
			//What was the error?
			switch($_FILES[$this -> inputName]['error']) {
				case 1:
					$result['message'] = 'Sorry, the file exceeds the maximum limit set by PHP';
					break;
				case 2:
					$result['message'] = 'Sorry, the file exceeds the maximum limit set in the form';
					break;
				case 3:
					$result['message'] = 'Sorry, the file was only partically uploaded';
					break;
				case 4:
					$result['message'] = 'Sorry, no file was uploaded';
					break;
			}
			$result['success'] = false;
		} else {
		//check if the file input is of a valid type
			$valid = in_array($_FILES[$this -> inputName]['type'],$this -> okTypes);
			if($valid) {
				//Check if the file reached the server's temporary location
				$uploaded = is_uploaded_file($_FILES[$this -> inputName]['tmp_name']);
				if($uploaded) {
					//specify a filepath
					$filepath = $this -> folder .'/' . uniqid() . '_' . $_FILES[$this -> inputName]['name'];
					//move the file from the temporary location to our specified filepath
					$moved = move_uploaded_file($_FILES[$this -> inputName]['tmp_name'],$filepath);
					if($moved) {
						//duble check that it exists
						$exists = file_exists($filepath);
						if($exists) {
							$result['message'] = 'The file was successfully uploaded!';
							$result['success'] = true;
							$result['filepath'] = $filepath;
						} else {
							$result['message'] = 'Sorry, the file did not reach the destination folder';
							$result['success'] = false;
						}
					} else {
						$result['message'] = 'Sorry, the file could not be moved';
						$result['success'] = false;
					}
				} else {
					$result['message'] = 'Sorry, the file did not reach the server';
					$result['success'] = false;
				}
			} else {
				$result['message'] = 'Please select an image file';
				$result['success'] = false;
			}
		}

		return $result;

	}//function:isUploaded
}//class













?>