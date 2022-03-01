<?php

namespace App;

use App\Customer\CustomerFilter;
use App\Customer\CustomerHandler;
use App\Customer\CustomerRequest;
use App\Vendor\Contracts\ITest;

/**
 * Контроллер
 */
class CustomerTest implements ITest
{
    /**
     * Запустить
     * @return void
     */
    public function run(): void
    {
        $request = new CustomerRequest();

        (new  CustomerHandler(new MockeryProvider()))->handle(
            new CustomerFilter(
                $request->getCustomerIds(),
                $request->getYear(),
                $request->getAuthor()
            )
        );
    }
}

