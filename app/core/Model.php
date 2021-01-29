<?php
    abstract class Model{
        public function __construct($arguments){
            $this->arguments = $arguments;
        }

        public function getParametres(){
            return $this->arguments;
        }
    }
?>
