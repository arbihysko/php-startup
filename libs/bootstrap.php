<?php

class Bootstrap {

	function __construct() {

		$url = isset($_GET['url']) ? $_GET['url'] : null; //get the url if it is set, if not let it null, later used as index
		$url = rtrim($url, '/'); // trim the last /
		$url = filter_var($url, FILTER_SANITIZE_URL); // sanitaze for security reasons
		$url = explode('/', $url); // explode the url

		// print_r($url); // for debug

		// call index if url is null
		if (empty($url[0])) {
			require_once "controllers/index.php";
			$controller = new Index();
			$controller->loadModel('index');
			$controller->index();
			return false;
		}

		// default calling controller function, checks iffile exists at controllers and then requires it
		$file = "controllers/$url[0].php";
		if (file_exists($file)) {
			require $file;
			//echo "1"; //debuging purposes
		} else {
			$this->errReport('Page not found!'); // throw error if not found, theres a msg in the box
			return false;
		}

		$controller = new $url[0]; // crete the controller named after the url
		$controller->loadModel($url[0]); // load its model


		//calling methods area
		if (isset($url[1])) { //check if isset
			if (method_exists($controller, $url[1])) {//check if method exists at the controller
				$controller->{$url[1]()};// execute the method
			} else {
				$this->errReport('Route not found!'); // if method not found throw error
				return false;
			}
		}

		$controller->index();

	}

	// error handeling function
	private function errReport($errMsg) {
		require "controllers/error.php";
		$controller = new Err(); // call in the error model
		$controller->index($errMsg); //	call index method and parse the message
	}

}

?>