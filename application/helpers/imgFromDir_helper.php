<?php
if (!function_exists('imgFromDir')){
    function imgFromDir($dir){
        $dir = 'assets/'.$dir.'/';
        $result = [];
        $i = 0;
        if (is_dir($dir)){
            if ($opendir = opendir($dir)){
                while (($file = readdir($opendir)) !== false){
                    $ext = new SplFileInfo($file);
                    $ext = $ext->getExtension();
                    if ($ext == 'jpg' or $ext == 'png'){
                        $result[$i] = $dir.$file;
                        $i++;
                    }
                }
            }
        }
        return $result;
    }
}