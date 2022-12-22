<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345');
define('DB_DATABASE', 'login');

$mysqli = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);