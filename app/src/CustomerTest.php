<?php

namespace Vendor;

use Filter;
use Handler;
use Request;

/**
 * Контроллер
 */
class CustomerTest extends Application implements ITest
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