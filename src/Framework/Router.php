<?php
namespace Framework;

class Router {

    const UNKNOWN_ROUTE = 1;

    private $routes = [];

    public function addRoute(Route $route)
    {
        if (!in_array($route, $this->routes)) {
            $this->routes[] = $route;
        }
    }

    public function run($url)
    {
        foreach ($this->routes as $route) {
            $routeMatched = $route->match($url);
            if ($routeMatched !== false) {
                if ($route->hasParamsKey()) {
                    $listParams = [];
                    $paramsKey = $route->getParamsKey();
                    foreach ($routeMatched as $key => $value) {
                        if ($key !== 0) {
                            $listParams[$paramsKey] = $value;
                        }
                    }
                    $route->setParams($listParams);
                }
                return $route;
            }
        }
        throw new \RuntimeException('Aucune route ne correspond à l\'URL', self::UNKNOWN_ROUTE);
    }
}
