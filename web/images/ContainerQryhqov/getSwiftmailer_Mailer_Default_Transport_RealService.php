<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default.transport.real' shared service.

include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\AbstractSmtpTransport.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\SmtpAgent.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\EsmtpTransport.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\InputByteStream.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Filterable.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\ByteStream\\AbstractFilterableInputStream.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\OutputByteStream.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\IoBuffer.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\StreamBuffer.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\ReplacementFilterFactory.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\StreamFilters\\StringReplacementFilterFactory.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\EsmtpHandler.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\Esmtp\\AuthHandler.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\Esmtp\\Authenticator.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\Esmtp\\Auth\\CramMd5Authenticator.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\Esmtp\\Auth\\LoginAuthenticator.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Transport\\Esmtp\\Auth\\PlainAuthenticator.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\swiftmailer-bundle\\DependencyInjection\\SmtpTransportConfigurator.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\EventDispatcher.php';
include_once $this->targetDirs[2].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Events\\SimpleEventDispatcher.php';

$a = new \Swift_Transport_Esmtp_AuthHandler([0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()]);
$a->setUsername('tonemail@gmail.com');
$a->setPassword(NULL);
$a->setAuthMode(NULL);

$this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), [0 => $a], ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : ($this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())) && false ?: '_'});

$instance->setHost('127.0.0.1');
$instance->setPort(25);
$instance->setEncryption(NULL);
$instance->setTimeout(30);
$instance->setSourceIp(NULL);
(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

return $instance;
