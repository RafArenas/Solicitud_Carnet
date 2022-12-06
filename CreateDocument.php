<?php

class CreateDocument{

    private $handle;

    public function __construct(string $route, string $mode = 'a+'){
        if(strlen($route) > 0 && strlen($mode) > 0){
            $this->handle = fopen($route, $mode);
        }
    }

    public function write(string $text): int|false {
        return fwrite($this->handle, $text . "\n");
    }

    public function close(){
        fclose($this->handle);
    }
}