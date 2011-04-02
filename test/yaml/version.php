<?php

require_once __DIR__ . '/../../config/bootstrap.php';

use Yaml\sfYaml;

echo sfYaml::getSpecVersion()."\n";