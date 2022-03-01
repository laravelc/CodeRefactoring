<?php

namespace App\Customer;

use App\Vendor\Contracts\IModel;
use App\Vendor\Contracts\IRenderable;

/**
 * Модель продавца
 */
class CustomerModel implements IModel, IRenderable
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
     * @param $customer_name
     * @param $birth_date
     * @param $books_count
     */
    public function __construct($id, $gender, $customer_name, $birth_date, $books_count)
    {
        $this->id = $id;
        $this->gender = $gender;
        $this->birth_date = $birth_date;
        $this->customer_name = $customer_name;
        $this->books_count = $books_count;
    }

    /**
     * @return string Представление
     */
    public function render(): string
    {
        return sprintf('<a href="/customers/?id=%d\">%s</a>', $this->id, $this->customer_name);
    }

    /**
     * @return int
     */
    public function getBirthDate(): int
    {
        return $this->birth_date;
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customer_name;
    }

    /**
     * @return int
     */
    public function getBooksCount(): int
    {
        return $this->books_count;
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}