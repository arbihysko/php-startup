<?php

class View
{
	
	function __construct()
	{
		// not rll anything to construct here, doesn't get that extended
	}
	//opt true means u have another rendering process
	public function render($name,$title, $opt = false) {

		$this->title = $title;//sets the title of the page

		if ($opt == false) {
			require_once "./views/partials/header.php";// sets the header
			require_once "./views/$name.php";//sets the content
			require_once "./views/partials/footer.php";// sets the footer
		} else {
			require_once "./views/$name.php";//only requires the content if the option is parsed as true
		}
		
	}

}
?>