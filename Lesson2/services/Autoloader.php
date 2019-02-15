<?php

namespace app\services;

class Autoloader
{
    private $paths = [
        'models',
        'services'
    ];


    public function loadClass($className)
    {
        foreach ($this->paths as $dir){
            $filename = $_SERVER['DOCUMENT_ROOT'] . "/../{$dir}/{$className}.php";
            if(file_exists($filename)){
                include $filename;
                break;
            }
        }
    }
}