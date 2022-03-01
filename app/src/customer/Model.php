<?php

namespace App\Customer;



use App\Vendor\Contracts\IModel;
use App\Vendor\Contracts\IRenderable;

class Model implements IModel, IRenderable
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var int
     */
    private int $gender;

    /**
     * @var string
     */
    private string $customer_name;

    /**
     * @var int
     */
    private int $birth_date;


    /**
     * @var int
     */
    private int $books_count;

    /**
     * Конструктор
     *
     * @param $id
     * @param $gender
     * @param $birth_date
     */
    public function __construct($id, $gender, $birth_date)
    {
        $this->id = $id;
        $this->gender = $gender;
        $this->birth_date = $birth_date;
    }

    /**
     * @return string Представление
     */
    public function render(): string
    {
        return sprintf('<a href="/customers/?id=%d\">%s</a>', $this->id, $this->customer_name);
    }
}