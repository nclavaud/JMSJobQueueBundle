<?php

use JMS\JobQueueBundle\Exception\LogicException;
use Doctrine\Common\Annotations\AnnotationRegistry;

call_user_func(function() {
    if ( ! is_file($autoloadFile = __DIR__.'/../vendor/autoload.php')) {
        throw new LogicException('Could not find vendor/autoload.php. Did you run "composer install --dev"?');
    }

    $loader = require $autoloadFile;
    AnnotationRegistry::registerLoader('class_exists');
});