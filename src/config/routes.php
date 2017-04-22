<?php

$dispatcher = \FastRoute\simpleDispatcher(function (\FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/playlist/get/{id}', 'getPlaylist');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
$response = new \Sabre\HTTP\Response();

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        $response->setStatus(404);
        $response->setHeader('Content-type', 'application/json');
        $response->setBody(json_encode(['code' => 404, 'message' => 'Not found.']));
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        $response->setStatus(405);
        $response->setHeader('Content-type', 'application/json');
        $response->setBody(json_encode(['code' => 405, 'message' => 'Method not allowed.']));
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $server = new \T00niebox\Server\Server($handler, $vars, $response);
        $server->dispatch();
        $response = $server->getResponse();
        break;
}

\Sabre\HTTP\Sapi::sendResponse($response);
