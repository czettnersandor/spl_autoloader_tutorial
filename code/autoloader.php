<?php

class Autoloader
{
    public static function loader($class)
    {
        $filename = strtolower($class) . '.php';
        //add directories in the order they should be looked in
        $dirs = array(
            0 => "local",
            1 => "core"
        );
        foreach($dirs as $key => $dir) {
            $file ='code/'.$dir.'/' . $filename;
            if (!file_exists($file))
            {
                $file = null;
            } else {
                //file found
                break;
            }
        }
        if(!is_null($file)) {
            include $file;
        }
        return false;
    }
}
