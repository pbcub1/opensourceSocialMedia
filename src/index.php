<?php
	//This is where the database functions are stored.

	require 'lib/db.php';
	class App{
		//Constants
		public const $appName = "Social networking website";
		public const $appVersion = 0.0.1

		//Constructor
		public __construct() {
			//Open database
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

	$app = new App();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $app->appName;?></title>
	</head>
	<body></body>
</html>
