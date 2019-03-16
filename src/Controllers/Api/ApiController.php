<?php

namespace App\Controllers\Api;

use Slim\Http\Request;
use Slim\Http\Response;

class ApiController extends \App\Controllers\AbstractController
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

	public function base(Request $request, Response $response)
	{
		$content = array("error" => "Not Found");
		$response = $response->withHeader("Content-type", "application/json");
		$response = $response->withJson($content, 404);
		return $response;
	}
}
