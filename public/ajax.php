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

$browser = new Browser();
$wims = new Wims\Wims();

switch ($_REQUEST['act']) {
	case 'getExternalIp':
		echo $wims->getExternalIpAddress();
		break;

	default:
		break;
}

?>