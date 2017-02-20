<?php

declare(strict_types = 1);
require_once "Autoloader.php";

sso_authentification_module\Autoloader::register();

try {
    var_dump(sso_authentification_module\controller\SsoFactory::load());
} catch(\EngineException $e) {
    echo "ENGINE: ".$e->getMessage();
}
