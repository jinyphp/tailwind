<?php

if(!function_exists("__ui_color_name")) {
    function __ui_color_name($name)
    {
        switch($name) {
            case 'gray':
                $color = "gray";
                break;
            case 'red':
                $color = "red";
                break;
            case 'orange':
                $color = "orange";
                break;
            case 'amber':
                $color = "amber";
                break;
            case 'emerald':
                $color = "emerald";
                break;
            case 'teal':
                $color = "teal";
                break;
            case 'blue':
                $color = "blue";
                break;
            case 'pink':
                $color = "pink";
                break;
            case 'rose':
                $color = "rose";
                break;

            case 'yellow':
                $color = "yellow";
                break;

            case 'primary':
            case 'indigo':
            default:
                $color = "indigo";
        }
        return $color;
    }
}



