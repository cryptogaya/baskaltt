<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheWarmer.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\TemplateIterator.php';

return $this->services['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(['twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
}]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[2].'\\app'), [($this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form') => NULL], ($this->targetDirs[2].'/templates')));
