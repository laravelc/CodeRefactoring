<?php

namespace App;

use App\Customer\CustomerModel;
use App\Vendor\Contracts\IProvider;
use App\Vendor\Provider;

/**
 * Провайдер для тестирования
 */
class MockeryProvider extends Provider implements IProvider
{
    /**
     * Конструктор
     */
    public function __construct()
    {
        parent::__construct();
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
        return [
            new CustomerModel(1, 1, 'Andrew', 1978, 1),
            new CustomerModel(2, 2, 'Zhenya', 1999, 1),
            new CustomerModel(3, 1, 'Andrew', 2000, 1),
        ];
    }
}