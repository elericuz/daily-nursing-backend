<?php
// DIC configuration

use InstagramScraper\Instagram;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Util\Common;

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$container['a2x'] = function ($c) {
    $common = new Common();
    return $common;
};

$container['em'] = function ($c) {
    $isDevMode = true;

    $paths = array(__DIR__."/App/Domain/Entity/");
    $isSimpleMode = false;
    $proxyDir = __DIR__."/data/DoctrineORMModule/Proxy";
    $cache = null;
    $config = Setup::createAnnotationMetadataConfiguration(
        $paths, $isDevMode, $proxyDir, $cache, $isSimpleMode
    );

    $conn = array(
        'driver' => 'pdo_mysql',
        'host' => 'mysql',
        'port' => 3306,
        'dbname' => 'asteria',
        'user' => 'root',
        'password' => 'password',
    );

    $entityManager = EntityManager::create($conn, $config);
    return $entityManager;
};