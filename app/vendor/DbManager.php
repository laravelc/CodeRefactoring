<?php

namespace App\Vendor;

use App\Vendor\Contracts\IDataManager;
use App\Vendor\Contracts\IProvider;
use Generator;

/**
 * Менеджер БД
 */
class DbManager implements IDataManager
{
    private IProvider $provider;

    public function __construct(IProvider $provider)
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