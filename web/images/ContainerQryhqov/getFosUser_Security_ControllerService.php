<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.security.controller' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareTrait.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller.php';
include_once $this->targetDirs[2].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\SecurityController.php';

$this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController(${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->load('getSecurity_Csrf_TokenManagerService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
