<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
include_once 'config.php';


$baseUrl='';
$baseDir=str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']
);
$baseUrl='http://'.$_SERVER['HTTP_HOST']. $baseDir;
define('BASE_UREL', $baseUrl);

$route=$_GET['route']??null;

function render($fileName,$params=[]){
	ob_start();
	extract($params);
	include $fileName;
	return ob_get_clean();
}

use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();
echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa';
$router->get('/admin', function() {

	return render('../views/admin/index.php');
});
echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaassss';

$router->get('/', function() use ($pdo){
	$query=$pdo->prepare('select * from blog_posts order by id desc');
	$query->execute();
	$blogPosts=$query->fetchAll(PDO::FETCH_ASSOC);
	return render('../views/index.php',['blogPosts'=>$blogPosts]);
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
//$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route));


//echo $_SERVER['REQUEST_URI'];
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);

echo $response;
 ?>