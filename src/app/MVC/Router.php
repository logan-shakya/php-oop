<?php

declare(strict_types = 1);

namespace App\MVC;

class Router
{
    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action): self
    {
       $this->routes[$requestMethod][$route] = $action;
        // var_dump($test);
        // die;
        return $this;
    }

    public function get(string $route, callable|array $action): self
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): self
    {
        return $this->register('post', $route, $action);
    }

    public function routes():array
    {
        return $this->routes;
    }

    //take in the requested URL and parsed that requested URL to figure out which action to run

    public function resolve(string $requestUri, string $requestMethod)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$requestMethod][$route] ?? null;
        // var_dump($action);
        // die;
        
        if(! $action) {
            throw new RouteNotFoundException();
        }

        if(is_callable($action)) {
            return call_user_func($action);
        }

        if(is_array($action)) {
            [$class, $method] = $action;

            if(class_exists($class)) {
                $class = new $class();

                if(method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
    }
}