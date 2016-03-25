<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 16:47
 */

require __DIR__ . "/../vendor/autoload.php";

session_start();

/* App settings */

$settings = require __DIR__ . "/../settings/settings.php";
$app = new \Slim\App($settings);

/* Middlewares */

require __DIR__ . "/../settings/middlewares.php";

/* Dependencies */

require __DIR__ . "/../settings/dependencies.php";

/* Routes */

require __DIR__ . "/../settings/routes.php";

$app->run();