<!-- init.php -->
<?php
session_start();

$GLOBALS['config'] =  array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db' => 'oophpBD'
	),
	'remember' =>array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' =>array(
		'session_name' => 'user',
		'token_name' => 'token'
	)
);

spl_autoload_register(function($class){
	require_once '../classes/'.$class. '.php';
	// require_once '../public/templetes'.$class. '.php';
});

require_once '../functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()){
		echo "Hash Matches, keep user login";
	}		
}

// class AssertRouteLink{
	
// 	public static function AssertRouteUrl($path_To_folder){
// 		define('ASSET_ROOT', 
// 			'http://'.$_SERVER['HTTP_HOST']. 
// 			str_replace(
// 				$_SERVER['DOCUMENT_ROOT'],
// 				'', 
// 				str_replace('\\', '/', dirname(__DIR__). '/'.$path_To_folder)
// 			)
// 		);
// 	}
// }