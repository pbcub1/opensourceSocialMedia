<?php
	require_once 'db.php';
	require_once 'generator.php';
	
	class App{
		//Constants
		public static const $appName = "Social networking website";
		public static const $appVersion = 0.0.1;

		//Constructor
		public __construct() {
			//Open database

			//TODO: Brainstorm what session variables to look for.
			//if session profile variable exist
				//get session entry based off session ID
				//if not expired
					//if type is session
						//generate feed page
					//else
						//generate logon page
				//else
					//generate logon page
			//else if cookie variables exist
				//get session entry based off cookie's session ID
				//if not expired
					//if type is cookie
						//create session variables
						//generate feed page
					//else
						//generate logon page
				//else
					//generate logon page
			//else
				//generate logon page
		}
	}
?>
