<?php

class Controller 
{
	function __construct()
	{
		$this->view = new View(); //call the view class
		$model = new Model(); //call the model class
	}
	
	public function loadModel($name) {

		$path = "models/".$name."_model.php"; //gets the path of model file from the model folder

		if (file_exists($path)) {//checks if the path exists

			require_once 'models/'.$name.'_model.php'; //requires the model

			$modelName = $name . '_Model';// prepares the model name
			$this->model = new $modelName();//creates model
		}
	}
}

?>