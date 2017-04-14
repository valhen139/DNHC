<?php


require 'vendor/autoload.php';

$app = new \Slim\Slim();

require 'app/clases/employee.php';
require 'app/routes/api.php';

$app->run();
?>