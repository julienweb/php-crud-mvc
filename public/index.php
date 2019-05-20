<?php
chdir(dirname(__DIR__));
require 'src/Framework/Autoload/SplClassLoader.php';
$frameLoader = new SplClassLoader('Framework', 'src');
$frameLoader->register();
$app = new \Framework\App();
$app->run();
