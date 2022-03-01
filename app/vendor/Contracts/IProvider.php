<?php

namespace Vendor;

interface IProvider
{
    /**
     * Получить данные
     *
     * @param string $query
     * @param string $class
     * @return mixed
     */
    public function getObjects(string $query, string $class): mixed;
}