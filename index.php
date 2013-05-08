<?php
require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

// esta linha mostra o hello name
$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 

$app->get('/', function() use($app) {
	return 'OK';
});

//executa
$app->run();
