<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.assets' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper.php';

return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'});
