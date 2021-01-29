<?php
    class View{
        public function __construct($viewFile){
            $this->viewFile = $viewFile;
        }
        
        public function generate(){
            $loader = new Twig\Loader\FilesystemLoader([ROOT . '/app/templates/', ROOT . '/app/views/']);
            $twig = new Twig\Environment($loader, []);
        
            $template = $twig->load('container.php');
            echo $template->render(['main' => $this->viewFile]);
        }
    }
?>

