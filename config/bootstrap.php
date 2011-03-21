<?php

require_once __DIR__.'/config.php';
require_once __DIR__.'/../src/Util/Autoloader.php';

use AdvancedContextLib\Util\Autoloader;
use AdvancedContextLib\Core;

Autoloader::getInstance()->setMap($nsMap);

