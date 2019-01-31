<?php
// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEW', 'views/');

// активный шаблон
define('TEMPLATE', 'views/test2/');

// сервер БД
define('HOST', 'localhost');

// пользователь
define('USER', 'root');

// БД
define('DB', 'test_books');

$db = new mysqli(HOST, USER,'', DB);
