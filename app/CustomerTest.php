<?php

use Vendor\ITest;

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

        (new  Handler())->handle(
            new Filter(
                $request->getCustomerIds(),
                $request->getYear(),
                $request->getAuthor()
            )
        );
    }
}