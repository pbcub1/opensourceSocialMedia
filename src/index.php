<?php
	require_once 'lib/db.php';
	require_once 'lib/app.php';
	require_once 'lib/generator.php';

	//TODO: Look to see if appData has been serialized in session, if not, then instatiate another one

	$app = new App();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!--Generate title based off of App name constant-->
		<title>Home | <?php echo App::$appName; ?></title>

		<!--Meta Tags-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="Home | <?php echo App::$appName; ?>" />
		<meta name="description" content="This is a Facebook like app. This app is not meant to be a competitor to Facebook, only a cool portfolio piece." />
		<meta name="author" content="David Green" />
		<meta name="version" content="<?php echo App::$appVersion; ?>" />
		<meat name="keywords" content="" />

		<!--Stylesheets-->
		<!--TODO: Figure out if I am installing bootstrap, and if I am, put the 2 necessary stylesheets here along with the style tags for any local changes-->

		<!--Scripts-->
		<!--TODO: Will have an application controller script, powered by jQuery-->
	</head>

	<body>
		<!--TODO: After page generation functions are in place, generate a page based off of page loading results.-->
	</body>
</html>
