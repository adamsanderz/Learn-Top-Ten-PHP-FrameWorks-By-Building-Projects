<?php
require '../app/db.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$segments = explode('/' , $_SERVER['REQUEST_URI_PATH']);



if(isset($segments[2])){

   $page_name= $segments[2];

   if($page_name =='categories' || $page_name == 'category') {

   	require_once('../app/api/category.php');

   }else if ($page_name =='post' || $page_name == 'posts'){

    require_once('../app/api/post.php');


   }
 
 }


$app->run();