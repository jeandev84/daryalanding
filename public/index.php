<?php
use Framework\App;

/** @var App $app */

require __DIR__.'/../vendor/autoload.php';


$app = require __DIR__.'/../bootstrap/app.php';

$response = $app->handle($request = new \Framework\Http\Request());

$response->send();

$app->terminate($request, $response);

