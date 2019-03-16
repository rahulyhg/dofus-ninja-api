<?php
$container = $app->getContainer();

/* $capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container->get('settings')['database']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['database'] = function ($c) use ($capsule) {
	return $capsule;
};*/

$container['session'] = function ($c) {
	return new Session();
};

$container['flash'] = function ($c) {
	return new \Slim\Flash\Messages();
};

$container['renderer'] = function ($c) {
	$settings = $c->get('settings')['renderer'];
	$view = new \Slim\Views\Twig($settings['template_path'], [
		'cache' => false
	]);

	$view->addExtension(new Slim\Views\TwigExtension(
		$c->router,
		$c->request->getUri()));
	return ($view);
};

$container[\App\Controllers\Auth\AuthController::class] = function($c) {
	return new \App\Controllers\Auth\AuthController($c);
};

$container[\App\Controllers\Home\HomeController::class] = function($c) {
	return new \App\Controllers\Home\HomeController($c);
};

$container[\App\Controllers\Api\ApiController::class] = function($c) {
	return new \App\Controllers\Api\ApiController($c);
};
