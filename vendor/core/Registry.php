<?php

namespace core;

class Registry
{

    use TSingleton;

    // Контейнер, куда мы будем записывать данные
    protected static array $properties = [];

    // Публичная метод для записи данных по ключу $name
    public function setProperty($name, $value): void
    {
        self::$properties[$name] = $value;
    }

    // Публичная метод для получения данных по ключю $name
    // Если ничего не найдём, то вернём null
    public function getProperty($name): mixed
    {
        return self::$properties[$name] ?? null;
    } 
    
    // Отладочный метод, который будет возвращать весь массив с данными
    public function getProperties(): array
    {
        return self::$properties;
    }

}