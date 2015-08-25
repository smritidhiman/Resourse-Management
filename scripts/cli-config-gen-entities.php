<?php
use Doctrine\ORM\Tools\EntityGenerator;
require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\ORM', realpath(__DIR__ . "/Doctrine/ORM/"));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\DBAL', realpath(__DIR__ . "/Doctrine/DBAL/"));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine\Common', realpath(__DIR__ . "/Doctrine/Common/"));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Symfony', realpath(__DIR__ . "/Doctrine/Symfony/"));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Entities', realpath(__DIR__ ));
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Proxies', realpath(__DIR__ ));
$classLoader->register();

$config = new \Doctrine\ORM\Configuration();
$config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);

$annotationDriver = $config->newDefaultAnnotationDriver(array(__DIR__."/Entities"));
$config->setMetadataDriverImpl($annotationDriver);

$config->setAutoGenerateProxyClasses(true);
$config->setProxyDir(__DIR__ . '/Proxies');
$config->setProxyNamespace('Proxies');

$connectionOptions = array(
    'dbname' => 'application',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);

$databaseDriver = new \Doctrine\ORM\Mapping\Driver\DatabaseDriver($em->getConnection()->getSchemaManager());
$em->getConfiguration()->setMetadataDriverImpl($databaseDriver);

$cmf = new \Doctrine\ORM\Tools\DisconnectedClassMetadataFactory($em);
$cmf->setEntityManager($em);

$conn = $em->getConnection();
$conn->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
$conn->getDatabasePlatform()->registerDoctrineTypeMapping('longblob', 'text');
$conn->getDatabasePlatform()->registerDoctrineTypeMapping('blob', 'text');
$conn->getDatabasePlatform()->registerDoctrineTypeMapping('varbinary', 'text');
$metadatas = $cmf->getAllMetadata();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));

$generator = new EntityGenerator();
$generator->setUpdateEntityIfExists(true);
$generator->setGenerateStubMethods(true);
$generator->setGenerateAnnotations(true);
$generator->generate($metadatas, __DIR__ . '../application/Entities');

