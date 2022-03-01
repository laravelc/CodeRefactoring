<?php

namespace App\Vendor\Contracts;

use Generator;

/**
 * Менеджер данных
 */
interface IDataManager
{
    public function getModels(string $query, string $class): Generator;
}