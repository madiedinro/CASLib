<?php

require_once __DIR__.'/../src/Util/Autoloader.php';

use AdvancedContextLib\Util\Autoloader;
use AdvancedContextLib\Core;
use Yaml\sfYaml;

$nsMap = array(
	'AdvancedContextLib' => __DIR__ . '/../src',
	'Yaml' => __DIR__ . '/../vendor/Yaml',
);

Autoloader::getInstance()->setMap($nsMap);

$config = sfYaml::load(__DIR__.'/config.yml');
Core::getInstance()->setParameters($config);

