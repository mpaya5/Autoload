<?php

function app_autoloader($class)
{
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoloader');