<?php

class Router {


    private static $routes;

    public static function load() {
        self::$routes = App::get('routes');
        $uri = Request::uri();

        if(array_key_exists($uri, self::$routes)) {
            return self::$routes[$uri];
        } else {
            throw new NotFoundException('URI ' . $uri . ' no definida');
        }
    }

    // private static function redirect($uri) {
    //     if(array_key_exists($uri, self::$routes)) {
    //         return self::$routes[$uri];
    //     } else {
    //         throw new NotFoundException('URI no definida');
    //     }
    // }

    // private function define($routes) {
    //     $this->routes = $routes;
    // }


}