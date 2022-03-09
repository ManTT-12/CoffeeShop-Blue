<?php

function env($value, $default = "")
{
    if (empty($value)) {
        return $default;
    }

    return $value;
}

function config($key)
{
    global $config;
    return $config[$key];
}

function view($view, $data = false)
{
    if ($data) {
        extract($data);
    }
    require_once('view/' . $view . '.php');
}