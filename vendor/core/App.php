<?php

namespace core;

class App
{

    // Метод в который будет записан наш контейнер
    public static $app;

    public function __construct()
    {
        new ErrorHandler();

        // Получаем экземпляр контейнера
        self::$app = Registry::getInstance();
        $this->getParams();
        $this->getDataBase();
    }

    // Метод для установки параметров фреймворка
    // Записываем параметры в контейнер
    protected function getParams(): void
    {
        $params = require_once CONFIG . "/params.php";

        if(!empty($params))
        {
            foreach($params as $k => $v)
            {
                self::$app->setProperty($k, $v);
            }
        }
    }

    protected function getDataBase(): void
    {
        $db = require_once CONFIG . "/db_params.php";

        if(!empty($db))
        {
            foreach($db as $k => $v)
            {
                self::$app->setProperty($k, $v);
            }
        }
    }
}