<?php

use Vendor\IFilter;

interface IHandler
{
    public function handle(IFilter $filter);
}