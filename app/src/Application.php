<?php

namespace Vendor;

class Application
{
    public function __construct()
    {
        include_all_php($folder);
    }

    function include_all_php($folder){
        foreach (glob("{$folder}/*.php") as $filename)
        {
            include $filename;
        }
    }
}