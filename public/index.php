<?php

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS.'/functions.php';

new \ishop\App();

\ishop\App::$app->setProperty("test", "Test");  
debug(\ishop\App::$app->getProprties());