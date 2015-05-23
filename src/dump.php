<?php

if (!function_exists('x'))
{
    function x($var)
    {
        echo '<pre>';
        if (is_array($var) or is_object($var))
        {
            print_r($var);
        }
        else
        {
            var_dump($var);
        }
        echo '</pre>';
    }
}

if (!function_exists('xx'))
{
    function xx($var)
    {
        die(x($var));
    }
}