<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));

// Константы с путём к папкам
define("WWW", ROOT . "/Public");
define("APP", ROOT . "/App");
define("CORE", ROOT . "/vendor/core");
define("HELPERS", ROOT . "/vendor/core/helpers");
define("CACHE", ROOT . "/tmp/cache");
define("LOGS", ROOT . "/tmp/logs");
define("CONFIG", ROOT . "/Config");

// Константы с сылками
define("LAYOUT", "shop");
define("PATH",  "127.0.0.1");
define("ADMIN",  "127.0.0.1/admin");
define("NO_IMAGE",  "127.0.0.1/uploads/no_image.png");

// Подключаем АВТОЗАГРУЗЧИК
require_once ROOT. "/vendor/autoload.php";