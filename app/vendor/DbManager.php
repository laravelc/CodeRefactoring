<?php

namespace App\Vendor;

use App\Vendor\Contracts\IDataManager;
use Generator;

/**
 * Менеджер БД
 */
class DbManager implements IDataManager
{
    private Provider $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Получение моделей
     *
     * @param string $query
     * @param string $class
     * @return Generator
     */
    public function getModels(string $query, string $class): Generator
    {
        $arr = $this->provider->getObjects($query, $class);
        foreach ($arr as $obj) {
            yield new $class($obj);
        }
    }
}