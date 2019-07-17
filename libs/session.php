<?php 

class Session 
{

	public static function init() {
		@session_start();//session start function
	}
	public static function set($key, $value) {
		$_SESSION[$key] = $value;//sets a session of mane $key and value $value
	}

	public static function get($key) {
		if (isset($_SESSION[$key])) {//checks if the session by the name key exists and then returns its value
			return $_SESSION[$key];
		}
		
	}
	public static function destroy() {
		session_destroy();//destroys the session
	}
}

?>