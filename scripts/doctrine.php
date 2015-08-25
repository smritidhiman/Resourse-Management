<?php
//@see https://github.com/doctrine/doctrine2/blob/master/bin/doctrine.php
// the current version of doctrine that we are using does not include
// the cli tool in vendor/bin this also lives in doctrine/orm/bin but expects
// config files to live there also, hence this copy

require_once __DIR__ . '/../vendor/autoload.php';

$classLoader = new \Doctrine\Common\ClassLoader('Doctrine');
$classLoader->register();

$classLoader = new \Doctrine\Common\ClassLoader('Symfony', 'Doctrine');
$classLoader->register();


$configFile = __DIR__ . '/cli-config-gen-entities.php';

$helperSet = null;
if (file_exists($configFile)) {
    if (!is_readable($configFile)) {
        trigger_error(
            'Configuration file [' . $configFile . '] does not have read permission.',
            E_ERROR
        );
    }

    require $configFile;

    foreach ($GLOBALS as $helperSetCandidate) {
        if ($helperSetCandidate instanceof \Symfony\Component\Console\Helper\HelperSet) {
            $helperSet = $helperSetCandidate;
            break;
        }
    }
}

$helperSet = ($helperSet) ?: new \Symfony\Component\Console\Helper\HelperSet();

\Doctrine\ORM\Tools\Console\ConsoleRunner::run($helperSet);
