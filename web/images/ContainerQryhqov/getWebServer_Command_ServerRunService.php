<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'web_server.command.server_run' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle\\Command\\ServerCommand.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand.php';

$this->services['web_server.command.server_run'] = $instance = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[2].'/public'), 'dev');

$instance->setName('server:run');

return $instance;
