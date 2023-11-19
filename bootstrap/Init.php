<?php

define ('BASEPATH', __DIR__ .'/../');


require BASEPATH. '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();


include BASEPATH."/routes/web.php";
include BASEPATH."/helpers/helpers.php";
