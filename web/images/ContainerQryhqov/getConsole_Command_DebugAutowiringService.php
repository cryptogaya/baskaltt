<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.debug_autowiring' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand.php';

$this->services['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand();

$instance->setName('debug:autowiring');

return $instance;
