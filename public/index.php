<?php
chdir(dirname(__DIR__));
const DS = DIRECTORY_SEPARATOR;
const DEFAULT_APP = 'Frontend';

// Autoload
require 'src/Framework/Autoload/SplClassLoader.php';
$fwLoader = new SplClassLoader('Framework', 'src');
$fwLoader->register();
$appLoader = new SplClassLoader('App', 'src');
$appLoader->register();
$dbLoader = new SplClassLoader('Database', 'src');
$dbLoader->register();

// Si l'application n'est pas valide, redirection vers l'application par défaut pour générer une erreur 404
if (empty($_GET['app']) || file_exists($_GET['app'])) {
    $_GET['app'] = DEFAULT_APP;
}

$appClass = DS.'App'.DS.$_GET['app'].DS.$_GET['app'].'App';
$app = new $appClass();
$app->run();
