<?php
require '../vendor/autoload.php';

// http://framework.zend.com/manual/1.12/de/zend.translate.using.html
$translate = new Zend_Translate(
	array(
	'adapter' => 'gettext',
	'content' => '/vagrant/translation/en.mo',
	'locale' => 'en'
	)
);
//Zend_Debug::dump($translate);
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $translate->_("Application Name"); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="container">
			<?php //Zend_Debug::dump($_SERVER); ?>
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1><?php echo $translate->_("Application Name"); ?> <small>(<?php echo $translate->_("Application Name Description"); ?>)</small></h1>
					</div>
					<p class="lead"><?php echo $translate->_("Infotext lead"); ?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="input-group input-group-lg">
						<span class="input-group-addon" id="sizing-addon1">@</span>
						<input type="text" class="form-control" placeholder="<?php echo $translate->_("Emailform Placeholdertext"); ?>" aria-describedby="sizing-addon1">
					</div>
				</div>
			</div>
			<br /><br />

			<div class="row">
				<div class="col-md-4">
					<div class="infobox" style="border: 1px solid #ccc; height: 200px;">
						your public ip address: <?php echo $_SERVER['REMOTE_ADDR']; ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="infobox" style="border: 1px solid #ccc; height: 200px;">
						your user agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
					</div>
				</div>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="/misc/js/master.js"></script>
	</body>
</html>
