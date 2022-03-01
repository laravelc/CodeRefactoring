<?php

namespace App;

use App\Customer\Filter;
use App\Customer\Handler;
use App\Customer\Request;
use App\Vendor\Contracts\ITest;

include_once __DIR__ . "/../vendor/bootstrap.php";


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
        $request = new Request();

        (new  Handler(new MockeryProvider()))->handle(
            new Filter(
                $request->getCustomerIds(),
                $request->getYear(),
                $request->getAuthor()
            )
        );
    }
}