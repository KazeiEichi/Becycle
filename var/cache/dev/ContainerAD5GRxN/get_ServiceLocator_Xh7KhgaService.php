<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Xh7Khga' shared service.

return $this->privates['.service_locator.Xh7Khga'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'accessory' => ['privates', '.errored..service_locator.Xh7Khga.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.Xh7Khga": it references class "App\\Entity\\Product" but no such service exists.'],
]);