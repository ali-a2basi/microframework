<?php

use App\Utilities\AssetManager;
use App\Utilities\AssetUrl;

include __DIR__."/bootstrap/Init.php";

echo AssetManager::css('style.css');



echo AssetUrl::current();







