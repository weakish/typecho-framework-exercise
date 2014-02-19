<?php

const ROOT = __DIR__;

require_once ROOT . '/typecho/Helper/Autoloader.php';

use TE\Helper\Autoloader;
use TE\Mvc\Base;
use TE\Mvc\Server\Http\Server;
use TE\Mvc\Router\Simple;
use TE\Mvc\Action\Interceptor\InterceptorManager;

Autoloader::registerNamespace(ROOT . '/typecho', 'TE');
Autoloader::registerNamespace(ROOT . '/app', 'Hello');
Base::setInjectiveObjects(require(ROOT . '/config/injects.php'));

new Server(new Simple(require(ROOT . '/config/routes.php')),
  new InterceptorManager(require(ROOT . '/config/interceptors.php')));
