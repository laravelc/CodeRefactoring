<?php

namespace Vendor;

/**
 * Провайдер для тестирования
 */
class MockeryProvider implements IProvider
{
    /**
     * Конструктор
     */
    public function __construct()
    {
    }

    /**
     * Получить данные
     *
     * @param string $query
     * @param string $class
     * @return mixed
     */
    public function getObjects(string $query, string $class): array
    {
        return [];
    }
}