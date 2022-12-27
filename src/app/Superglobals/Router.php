<?php

declare(strict_types = 1);

namespace App\Superglobals;

class Router
{
    private array $route;

    public function register(string $route, callable|array $action): self
    {
        $this->route[$route] = $action;

        return $this;
    }

    //take in the requested URL and parsed that requested URL to figure out which action to run

    public function resolve(string $requestUri)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->route[$route] ?? null;
        
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