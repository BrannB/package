<?php

ini_set('display_errors', 1);
error_reporting(E_ALL) ;


require_once '../vendor/autoload.php';

use Log\Logger;
use Psr\Log\LogLevel;

Logger::log(LogLevel::NOTICE,'Test log');