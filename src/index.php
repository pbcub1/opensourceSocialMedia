<?php
	//This is where the database functions are stored.

	require 'lib/db.php';
	class App{
		//Constants
		public const $appName = "Social networking website";
		public const $appVersion = 0.0.1;

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
		<!--Generate title based off of App name constant-->
		<title>Home | <?php echo $app->appName; ?></title>

		<!--Meta Tags-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="Home | <?php echo $app->appName; ?>" />
		<meta name="description" content="This is a Facebook like app. This app is not meant to be a competitor to Facebook, only a cool portfolio piece." />
		<meta name="author" content="David Green" />
		<meta name="version" content="<?php echo $app->appVersion; ?>" />
		<meat name="keywords" content="" />

		<!--Stylesheets-->
		<!--Scripts-->
	</head>

	<body>
		
	</body>
</html>
