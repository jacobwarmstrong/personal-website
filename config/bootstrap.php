<?php
//bootstrap.php

//autoload composer dependencies
require 'vendor/autoload.php';

//load environment
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//require functions
require 'functions.php';