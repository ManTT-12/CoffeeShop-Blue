<?php 
require_once 'env.php';

$config = [
    "app_url" => env(APP_URL, "http://localhost/"), 
    "mysql_host" => env(MYSQL_HOST, "localhost"), 
    "mysql_port" => env(MYSQL_PORT, "3306"), 
    "mysql_username" => env(MYSQL_USERNAME, "root"), 
    "mysql_password" => env(MYSQL_PASSWORD, ""), 
    "mysql_database" => env(MYSQL_DATABASE, ""), 
    "api_url" => env(API_URL, "http://localhost/api/v1/"), 
];