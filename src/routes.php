<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('', 
	function() 
	{
		$this->get('/', \App\Controllers\Home\HomeController::class . ':show')->setName('home.show');
	});

$app->group('/api/v1',
	function()
	{
		$this->get('/', \App\Controllers\Api\ApiController::class . ':base')->setName('api.base');
	});

