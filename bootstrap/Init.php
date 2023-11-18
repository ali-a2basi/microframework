<?php

define ('BASEPATH', __DIR__.'/../');


require BASEPATH. '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include BASEPATH."/helpers/helpers.php";
use App\Utilities\AssetManager;