<?php
    abstract class Controller{
        public function __construct($name, $arguments)
        {
            $this->name = $name;
            $this->arguments = $arguments;
        }
        
        public function actionList(){
            
            $modelFile = MODELS . $this->name . 'Model.php';
            $viewFile = $this->name . 'View.php';
            
            require_once($modelFile);

            $modelName = $this->name . 'Model';

            $model = new $modelName($this->arguments);
            $parameters = $model->getParametres();

            $view = new View($viewFile);
            $view->generate();

        }
    }
?>
