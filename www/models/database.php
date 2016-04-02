<?php
include('../config.php'); // database access info
class Database {
	// Declare our class properties
	private $dbc; // Database connection object

	public function __construct() {
		// Assign class property values
		try {
			$this -> dbc = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
			if (mysqli_connect_errno()) {
				throw new Exception('Database connection failed');
			}
		} catch(Exception $e) {
			die($e -> get_message());
		}
	}

	/* QUERY PROCESSING */

	// Called on index.php; sent $_GET['page'] returns database info
	public function get_page_info($page) {
		$query = "SELECT pageID, page, pageTitle, pageDesc, pageKeywords FROM pages WHERE page='$page'";
		$data = $this -> single_select_query($query);
		return $data;
	}

	// Check the login details match those in the users table
	public function checkLogin() {
		extract($_POST);
		// Hash the password that was entered into the form (if it was correct, it will match the hashed password in the database)
		$password = sha1($password);
		$query = "SELECT userID, username, admin, password FROM users WHERE username='$username' AND password='$password'";
		$data = $this -> single_Select_Query($query);
		return $data;
	}

	/* QUERY FUNCTION PROCESSING SECTION */
	private function single_select_query($query) {
		$result = $this -> dbc -> query($query);
		if (!$result) {
			die($query);
		} else {
			if ($result -> num_rows > 0) {
				$data = $result -> fetch_assoc();
				return $data;
			} else {
				return false;
			}
		}
	}

		//This function will return a query result - either true or false (affected or not) 
	//this function also holds the operation to add, insert and delete rows within the database
	public function affected_query($query) {
		//run the query
		$result = $this -> dbc -> query($query);
		//test the query
		if(!$result) {
			die('query error');
		} else {
			if($this -> dbc -> affected_rows > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
	// Gets all image content from the database
	public function getAllImages() {
		$query = "SELECT imageID, image, caption, headerCaption FROM gallery";
		$data  = $this -> dbc -> query($query);
		return $data;
	}
	// Deletes image from gallery and database
	public function deleteImage() {
		$imageID = $_POST['image'];
		$query = "DELETE FROM gallery WHERE imageID='$imageID'";
		$data = $this -> affected_query($query);
		return $data;
	}
	//Gets the image captions
	public function getImage($imageID) {
		$query = "SELECT imageID, caption, headerCaption, image FROM gallery WHERE imageID='$imageID'";
		$data = $this -> single_select_query($query);
		return $data;
	}
	// Adds the images to the gallery and the database
	public function addImage($image) {
		//get the image form data in the form of key = value (form name = form input)
		extract($_POST);
		$query = "INSERT INTO gallery VALUES(NULL,'$image', '$caption', '$headerCaption')";
		$data  = $this -> dbc -> query($query);
		return $data;
	}









} // Database class closing tag

?>