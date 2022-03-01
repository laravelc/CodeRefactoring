<?php

namespace Vendor;

use Filter;
use Handler;
use Request;

/**
 * Контроллер
 */
class CustomerController extends Application implements IController
{
    /**
     * Запустить
     * @return void
     */
    public function run(): void
    {
        $request = new Request();

        (new  Handler())->handle(
            new Filter(
                $request->getCustomerIds(),
                $request->getYear(),
                $request->getAuthor()
            )
        );
    }
}