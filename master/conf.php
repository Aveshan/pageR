<?php
date_default_timezone_set('Asia/Calcutta');

define('URL', 'http://localhost/pageR');

define("DB_HOST", "localhost");
define("DB_NAME", "pageR");
define("DB_USER", "root");
define("DB_PASS", "");

require 'master/login.php';
require 'master/pager.php';
require 'master/core.php';