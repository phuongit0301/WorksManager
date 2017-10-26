<?php
ini_set('display_errors', 1); // display errors

require_once __DIR__ . '/application/config/connection.php';
require_once __DIR__ . '/application/views/layout.php';
require_once __DIR__ . '/application/routes/web.php';

Route::start(); // run routing