<?php
if (!function_exists('imgFromDir')){
    function imgFromDir($dir){
        $dir = __DIR__."/../views/".$dir;
        $result = [];
        if (is_dir($dir)){
            if ($opendir = opendir($dir)){
                while (($file = readdir($opendir)) !== false){
                    $ext = new SplFileInfo($file);
                    $ext = $ext->getExtension();
                    if ($ext == 'jpg' || $ext == 'png')
                        $result[] = "assets/statics/".str_replace(__DIR__."/../views/","",$dir.$file);
                }
            }
        }
        return $result;
    }
}