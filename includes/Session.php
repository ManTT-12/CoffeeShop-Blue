<?php

class Session
{
    public static function init()
    {
        session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if(!isset($_SESSION[$key])) {
            return null;
        }
        return $_SESSION[$key];
    }

    public static function unset($key)
    {
        unset($_SESSION[$key]);
    }

    public static function checkAuthUser()
    {
        if(self::get('login_user') && self::get('login_user') == false) {
            return header('location: ' . APP_URL);
        }
    }

    public static function checkAuthAdmin()
    {
        if(self::get('login_admin') && self::get('login_admin') == false) {
            return header('location: ' . APP_URL . 'admin/login.php');
        }
    }

    public static function checkLoginAdmin()
    {
        if(self::get('login_admin') && self::get('login_admin') == true) {
            return header('location: ' . APP_URL . 'admin/login.php');
        }
    }
}
