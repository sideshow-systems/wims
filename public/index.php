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

// Get browser
// https://github.com/cbschuld/Browser.php/
$browser = new Browser();
//Zend_Debug::dump($browser);
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
		<link rel="stylesheet" href="/misc/css/master.css">

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
			<?php //print_r($_SERVER); ?>
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1><?php echo $translate->_("Application Name"); ?> <small>(<?php echo $translate->_("Application Name Description"); ?>)</small></h1>
					</div>
					<p class="lead"><?php echo $translate->_("Infotext lead"); ?></p>
				</div>
			</div>

			<br />

			<div class="row">
				<div class="col-md-12">
					<form>
						<div class="input-group input-group-lg">
							<span class="input-group-addon" id="sizing-addon1">@</span>
							<input type="text" class="form-control" placeholder="<?php echo $translate->_("Emailform Placeholder Text"); ?>" aria-describedby="sizing-addon1">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button"><?php echo $translate->_("Emailform Sendbutton Text"); ?></button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<br /><br />

			<div class="row">
				<!-- Current Viewport -->
				<div id="ib_current-viewport" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_current-viewport.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $translate->_("Box Desc Loading Placeholder"); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Current Viewport"); ?></h5>
						</div>
					</div>
				</div>
				
				<!-- Available Windowsize -->
				<div id="ib_available-windowsize" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_screen-resolution.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $translate->_("Box Desc Loading Placeholder"); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Available Windowsize"); ?></h5>
						</div>
					</div>
				</div>
				
				<!-- Color Depth -->
				<div id="ib_color-depth" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_color-depth.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $translate->_("Box Desc Loading Placeholder"); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Color Depth"); ?></h5>
						</div>
					</div>
				</div>
				
				<!-- Cookies Enabled -->
				<div id="ib_cookies-enabled" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_cookie.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $translate->_("Box Desc Loading Placeholder"); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Cookies Enabled"); ?></h5>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<!-- User Agent -->
				<div id="ib_user-agent" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_user-agent.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $browser->getUserAgent(); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc User Agent"); ?></h5>
						</div>
					</div>
				</div>
				
				<!-- Operating System -->
				<div id="ib_operating-system" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<img src="/misc/pics/boxbg_operating-system.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $translate->_("Box Desc Loading Placeholder"); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Operating System"); ?></h5>
						</div>
					</div>
				</div>
				
				<!-- Browser -->
				<div id="ib_browser" class="infobox col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail">
						<div class="img_container text-center">
							<?php
							$browserBgImage = 'default';
							switch ($browser->getBrowser()) {
								case Browser::BROWSER_FIREFOX:
									$browserBgImage = 'firefox';
									break;
								case Browser::BROWSER_OPERA:
									$browserBgImage = 'opera';
									break;
								case Browser::BROWSER_IE:
									$browserBgImage = 'ie';
									break;
								case Browser::BROWSER_SAFARI:
									$browserBgImage = 'safari';
									break;
								case Browser::BROWSER_CHROME:
									$browserBgImage = 'chrome';
									break;
								
									
								default:
									break;
							}
							?>
							<img src="/misc/pics/boxbg_browser-<?php echo $browserBgImage; ?>.png" class="img-responsive" />
							<p class="infotext">
								<span class="inner"><?php echo $browser->getBrowser() . ' ' . $browser->getVersion(); ?></span>
							</p>
						</div>
						<div class="caption text-center">
							<h5><?php echo $translate->_("Box Desc Browser"); ?></h5>
						</div>
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
