<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.command.deactivate_user' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[2].'\\vendor\\friendsofsymfony\\user-bundle\\Command\\DeactivateUserCommand.php';

$this->services['fos_user.command.deactivate_user'] = $instance = new \FOS\UserBundle\Command\DeactivateUserCommand(${($_ = isset($this->services['fos_user.util.user_manipulator']) ? $this->services['fos_user.util.user_manipulator'] : $this->load('getFosUser_Util_UserManipulatorService.php')) && false ?: '_'});

$instance->setName('fos:user:deactivate');

return $instance;
