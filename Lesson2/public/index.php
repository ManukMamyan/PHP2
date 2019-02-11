<?php
include '../services/Autoloader.php';

use app\services\Autoloader;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new app\models\Product();
var_dump($product);
