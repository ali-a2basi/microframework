<?php

use App\Core\Request;
use App\Core\StupidRouter;
use App\Utilities\AssetUrl;

include __DIR__."/bootstrap/Init.php";

$request = new Request();
var_dump($request->family);







// $router = new StupidRouter;
// $router->start_router();

/* simple router for learning
$uri = AssetUrl::current_uri();





if($uri === '/colors/blue')
    
    include BASEPATH . '/views/colors/blue.php';

if($uri == '/colors/green')
    include BASEPATH  . '/views/colors/green.php';
if($uri == '/colors/red')
    include BASEPATH  . '/views/colors/red.php';

*/









