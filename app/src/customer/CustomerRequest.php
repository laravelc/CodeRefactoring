<?php

namespace App\Customer;

/**
 * Объект запроса
 */
class CustomerRequest
{
    /**
     * @var array|mixed
     */
    private array $customer_ids;

    /**
     * @var int|mixed
     */
    private array $year;

    /**
     * @var int|mixed
     */
    private int $author;

    /**
     * Конструктор
     */
    public function __construct()
    {
        $this->customer_ids = $_GET['customer_ids'] ?? [];
        $this->year = $_GET['year'] ?? [];
        $this->author = $_GET['author'] ?? 0;
    }

    /**
     * @return int
     */
    public function getAuthor(): int
    {
        return $this->author;
    }

    /**
     * @return array
     */
    public function getYear(): array
    {
        return $this->year;
    }

    /**
     * @return array
     */
    public function getCustomerIds(): array
    {
        return $this->customer_ids;
    }
}