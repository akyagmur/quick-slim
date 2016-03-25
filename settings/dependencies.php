<?php
/**
 * @author: Ali Kenan Yağmur
 * Date: 25.03.2016
 * Time: 16:53
 */

$container = $app->getContainer();

$container['view'] = function ($c) {
    $settings = $c->get('settings')['view'];
    return new \Slim\Views\PhpRenderer($settings['template_folder']);
};