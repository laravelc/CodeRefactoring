<?php

namespace App\Vendor\Contracts;

/**
 * Отображаемый
 */
interface IRenderable
{
    /**
     * Отобразить
     *
     * @return string Поолучить результат отображения
     */
    public function render(): string;
}