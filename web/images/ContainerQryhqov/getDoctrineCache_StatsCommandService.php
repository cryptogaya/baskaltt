<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.stats_command' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\doctrine-cache-bundle\\Command\\CacheCommand.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\doctrine-cache-bundle\\Command\\StatsCommand.php';

return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
