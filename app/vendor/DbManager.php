<?php

namespace App\Vendor;

use App\Vendor\Contracts\IDataManager;
use Generator;

class DbManager implements IDataManager
{
    private Provider $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }

    public function getModels(string $query, string $class): Generator
    {
        $arr = $this->provider->getObjects($query, $class);
        foreach ($arr as $obj) {
            yield new $class($obj);
        }
    }
}