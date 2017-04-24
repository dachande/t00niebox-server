<?php
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Yaml;

// Load configuration
$configDirectories = array(__DIR__);
$locator = new FileLocator($configDirectories);
$configFile = $locator->locate('app.yml');
$GLOBALS['config'] = Yaml::parse(file_get_contents($configFile));

// Initialize routing
require 'config/routes.php';
