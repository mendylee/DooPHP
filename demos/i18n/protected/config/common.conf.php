<?php
/*
 * Common configuration that can be used throughout the application
 * Access via Singleton, eg. Doo::conf()->BASE_PATH;
 */
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('Asia/Kuala_Lumpur');
/**
 * for benchmark purpose, call Doo::benchmark() for time used.
 */
//$config['START_TIME'] = microtime(true);


//framework use, must defined
$config['SITE_PATH'] = str_replace('protected\config', '', str_replace('protected/config', '', dirname(__FILE__)));
$config['BASE_PATH'] = str_replace('demos\i18n', 'dooframework', str_replace('demos/i18n', 'dooframework', $config['SITE_PATH']));
$config['APP_MODE'] = 'dev'; //for production mode use 'prod'

//----------------- optional, if not defined, default settings are optimized for production mode ----------------
$config['SUBFOLDER'] = '/demos/i18n/';
$config['APP_URL'] = 'http://'.$_SERVER['HTTP_HOST'].$config['SUBFOLDER'];
//$config['AUTOROUTE'] = TRUE;
$config['DEBUG_ENABLED'] = TRUE;


/**
 * defined either Document or Route to be loaded/executed when requested page is not found
 * A 404 route must be one of the routes defined in routes.conf.php (if autoroute on, make sure the controller and method exist)
 * Error document must be more than 512 bytes as IE sees it as a normal 404 sent if < 512b
 */
//$config['ERROR_404_DOCUMENT'] = 'error.php';
$config['ERROR_404_ROUTE'] = '/error';

/**
 * you can include self defined config, retrieved via Doo::conf()->variable
 * Use lower case for you own settings for future Compability with DooPHP
 */
$config['default_lang'] = 'en';
$config['lang'] = 'en';
?>