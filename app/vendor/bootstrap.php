<?php

include_all_php(__DIR__ . '/contracts');
include_all_php(__DIR__);
include_all_php(__DIR__ . '../src');
include_all_php(__DIR__ . '../src/customer');

/**
 * Включить все файлы в директории
 *
 * @param $folder
 * @return void
 */
function include_all_php($folder)
{
    foreach (glob("{$folder}/*.php") as $filename) {
        include_once $filename;
    }
}
