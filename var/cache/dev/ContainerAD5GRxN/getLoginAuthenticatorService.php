<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Security\LoginAuthenticator' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/AuthenticatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-guard/Authenticator/AbstractFormLoginAuthenticator.php';
include_once $this->targetDirs[3].'/src/Security/LoginAuthenticator.php';

return $this->privates['App\Security\LoginAuthenticator'] = new \App\Security\LoginAuthenticator(($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['session'] ?? $this->load('getSessionService.php')), ($this->privates['App\Services\CartService'] ?? $this->load('getCartServiceService.php')));