<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 17:20
 */

/**
 * Set your timezone, default timezone is UTC
 */
date_default_timezone_set("Europe/Istanbul");
use Illuminate\Database\Capsule\Manager as Capsule;

$settings = require __DIR__ . '/../settings/settings.php';

/**
 * Boot Eloquent
 */
$capsule = new Capsule;

$capsule->addConnection($settings['settings']['database']);
$capsule->setAsGlobal();
$capsule->bootEloquent();