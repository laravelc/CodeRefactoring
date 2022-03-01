<?php

namespace Vendor;

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