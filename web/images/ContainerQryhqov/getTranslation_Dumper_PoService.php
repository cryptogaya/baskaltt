<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.dumper.po' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Dumper\\DumperInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Dumper\\FileDumper.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Translation\\Dumper\\PoFileDumper.php';

return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
