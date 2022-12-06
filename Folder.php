<?php

class Folder{
    
    /**
     * createDirectory
     *
     * @param  string $directory
     * @return bool|string
     */
    public static function createDirectory(string $directory):bool | string{
        if(!is_dir($directory)){
            if(mkdir($directory, 0777, true)){
                return true;
            }else{
                return 'error'; 
            }
        }
        return false;
    }
}