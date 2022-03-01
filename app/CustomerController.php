<?php

use Vendor\IController;

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