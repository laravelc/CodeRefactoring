<?php

namespace App;

use App\Customer\CustomerFilter;
use App\Customer\CustomerHandler;
use App\Customer\CustomerRequest;
use App\Vendor\Contracts\IController;


/**
 * Контроллер
 */
class CustomerController implements IController
{
    /**
     * Запустить
     * @return void
     */
    public function run(): void
    {
        $request = new CustomerRequest();

        (new  CustomerHandler())->handle(
            new CustomerFilter(
                $request->getCustomerIds(),
                $request->getYear(),
                $request->getAuthor()
            )
        );
    }
}