<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('active'))
    {
        function active($controller)
        {
            $CI = get_instance();

            $class = $CI->router->fetch_class();

            return ($class == $controller) ? 'active' : '';
        }
    }