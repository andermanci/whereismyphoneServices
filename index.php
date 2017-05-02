<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

$app->register(new Herrera\Pdo\PdoServiceProvider(),
							   array(
								   'pdo.dsn' => 'pgsql:dbname=d32n963hbr8ngb;host=ec2-79-125-125-97.eu-west-1.compute.amazonaws.com;port=5432',
								   'pdo.username' => "ofwsfkgedzztju",
								   'pdo.password' =>"fbd2eab314bba2b3c81cd727730947c9ef5445f01bb2542821a124b2c99b4f98"
							   )
);

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->run();
