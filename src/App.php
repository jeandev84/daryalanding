<?php
namespace Framework;


use Framework\Http\Request;
use Framework\Http\Response;
use Framework\Routing\Router;

/**
 * @App
*/
class App
{


     /**
      * @var App
     */
     public static $app;



     /**
      * @var string
     */
     public $root;



     /**
      * @var Router
     */
     protected $router;




     /**
      * App constructor
     */
     private function __construct(string $root)
     {
          $this->root = rtrim($root, '\\/');

          $this->router = new Router();
     }





     /**
      * @param string $root
      * @return static
     */
     public static function instance(string $root): self
     {
          if (! self::$app) {
              self::$app = new self($root);
          }

          return self::$app;
     }



     /**
      * @param $path
      * @param $action
      * @return void
     */
     public function get($path, $action)
     {
         $this->router->map(['GET'], $path, $action);
     }




     /**
      * @param Request $request
      * @return Response
     */
     public function handle(Request $request): Response
     {
          $response = new Response();

          if (! $route = $this->router->dispatch($request->getMethod(), $request->getPath())) {
                dd("ROUTE NOT FOUND!");
          }

          $controller = $route['action'][0];
          $action     = $route['action'][1];

          $output = "";

          if (method_exists($controller, $action)) {
              $output = call_user_func_array([new $controller(), $action], $route['matches']);
          }


          if ($output instanceof Response) {
              return $output;
          }

          $response->withBody($output);

          return $response;
     }




     /**
      * @param Request $request
      * @param Response $response
      * @return void
     */
     public function terminate(Request $request, Response $response)
     {
          echo $response;
     }
}