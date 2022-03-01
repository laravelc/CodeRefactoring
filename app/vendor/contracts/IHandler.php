<?php

namespace App\Vendor\Contracts;

interface IHandler
{
    public function handle(IFilter $filter);
}