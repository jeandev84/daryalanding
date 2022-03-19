<?php

/** @var App $app */

use Framework\App;


// Initialize application
$app = App::instance(
    realpath(__DIR__.'/../')
);


// Load helpers
require __DIR__.'/helpers.php';



// Add routes
$app->get('/', [\App\Http\Controller\LadingController::class, 'index']);



// Return application
return $app;