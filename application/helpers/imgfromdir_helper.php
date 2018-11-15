<?php
if (!function_exists('imgfromdir')){
    function imgfromdir($dir){
        $dir = $dir.'/';
        $result = [];
        $i = 0;
        if (is_dir($dir)){
            if ($opendir = opendir($dir)){
                while (($file = readdir($opendir)) !== false){
                    $ext = new SplFileInfo($file);
                    $ext = $ext->getExtension();
                    if ($ext == 'jpg' || $ext == 'png'|| $ext == 'jpeg'){
                        $result[$i] = $dir.$file;
                        $i++;
                    }
                }
            }
        }
        return $result;
    }
}