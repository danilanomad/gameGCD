#!/usr/bin/env php
<?php

require_once __DIR__ . '\..\vendor\autoload.php';
use danilanomad\GCD\Controller;

$controller = new danilanomad\GCD\Controller();
$controller->startGame();