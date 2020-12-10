<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'timereport');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('Cannot connect database');

?>