<?php

namespace App\Controllers\Home;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends \App\Controllers\AbstractController
{
	protected	$renderer;

	/**
	 * HomeController constructor.
	 *
	 * @param \Slim\Container
	 */
	public function __construct($container)
	{
		parent::__construct($container);
		$this->renderer = $container->renderer;
	}

	public function show(Request $request, Response $response)
	{
		$this->renderer->render($response, 'home/home.twig', []);
		return $response;
	}
}
