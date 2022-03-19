<?php
namespace Framework\Routing;


/**
 * @Router
*/
class Router
{

      /**
       * @var array
      */
      protected $routes = [];


      /**
       * @param array $methods
       * @param $path
       * @param $action
       * @return void
      */
      public function map(array $methods, $path, $action)
      {
           $this->routes[] = compact('methods', 'path', 'action');
      }


      /**
       * @param $requestMethod
       * @param $requestPath
       * @return mixed|bool
      */
      public function match($requestMethod, $requestPath) {

          foreach ($this->routes as $route) {

              $matchedPath = preg_match('#^'. $route['path'] .'$#i', $requestPath, $matches);

              if (\in_array($requestMethod, $route['methods']) && $matchedPath) {
                  $route['matches'] = $matches;
                  return $route;
              }
          }

          return false;
      }




      /**
        * @param $requestMethod
        * @param $requestPath
        * @return mixed
      */
      public function dispatch($requestMethod, $requestPath)
      {
           if (! $route = $this->match($requestMethod, $requestPath)) {
               return false;
           }

           return $route;
      }
}