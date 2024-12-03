<?php

namespace core;

trait TSingleton
{

    // В него вы будем записывать экземпляр класса
    // ?self такая запись говорит, что здесь может быть экземпляр класс или null
    private static ?self $instance = null;

    private function __construct(){}

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static(); 
    }
}