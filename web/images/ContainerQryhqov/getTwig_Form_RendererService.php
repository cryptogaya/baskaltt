<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.form.renderer' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRendererInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRenderer.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormRendererEngineInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractRendererEngine.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Form\\TwigRendererEngineInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine.php';

return $this->services['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}), ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->load('getSecurity_Csrf_TokenManagerService.php')) && false ?: '_'});
