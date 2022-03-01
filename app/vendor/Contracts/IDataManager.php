<?php

namespace Vendor;

use Generator;

/**
 * Менеджер данных
 */
interface IDataManager
{
    public function getModels(string $query, string $class): Generator;
}