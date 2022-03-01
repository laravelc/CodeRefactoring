<?php

namespace App\Vendor\Contracts;

use Generator;

/**
 * Менеджер данных
 */
interface IDataManager
{
    /**
     * Получить модели
     *
     * @param string $query
     * @param string $class
     * @return Generator
     */
    public function getModels(string $query, string $class): Generator;
}