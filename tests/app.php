#!/usr/bin/env php
<?php

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');

error_reporting(E_ALL);

!defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';