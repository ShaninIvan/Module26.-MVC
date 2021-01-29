<?php
    class Router{
        private $routes;

        public function __construct()
        {
            $routesPath = ROOT . '/app/config/routes.php';
            $this->routes = include($routesPath);
        }

        private function getURI(){
            if ($_SERVER['REQUEST_URI'] !='/'){
                return trim($_SERVER['REQUEST_URI'], '/');
            }else{
                return 'about';
            }
        }

        public function run(){
            $uri = $this->getURI();
            
            foreach($this->routes as $pattern => $path){
                if (preg_match("~$pattern~", $uri)){
                    $segments = explode('/', $path);

                    $name = ucfirst(array_shift($segments));
                    $controllerName = $name . 'Controller';
                    $actionName = 'action' . ucfirst(array_shift($segments));

                    $controllerFile = ROOT . '/app/controllers/' . $controllerName . '.php';
                
                    if (file_exists($controllerFile)){
                        include_once($controllerFile);
                    }

                    $controller = new $controllerName($name, [1, 2, 3]);
                    $result = $controller->$actionName();

                    if ($result !=null){
                        break;
                    }
                }
            }
        }
    }
?>
