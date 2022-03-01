<?php

namespace Vendor;

use Generator;

interface IDataManager
{
    public function getModels(string $query, string $class): Generator;
}