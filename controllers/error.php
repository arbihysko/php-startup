<?php

class Err extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index($errMsg) {
		$this->view->msg= $errMsg;
		$this->view->render('error', 'Error');
	}


}

?>