<?php

namespace App\Vendor\Contracts;

/**
 * Обработчик
 */
interface IHandler
{
    /**
     * Метод обработчика
     *
     * @param IFilter $filter
     * @return mixed
     */
    public function handle(IFilter $filter);
}