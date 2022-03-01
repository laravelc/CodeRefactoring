<?php

use Vendor\IFilter;

/**
 * Фильтр
 */
class Filter implements IFilter
{
    /**
     * @var array|mixed
     */
    private array $customer_ids;

    /**
     * @var int|mixed
     */
    private int $year_start;

    /**
     * @var int|mixed
     */
    private int $year_end;

    /**
     * @var int|mixed
     */
    private int $author;

    /**
     * Конструктор
     *
     * @param $customer_ids
     * @param array $year
     * @param int $author
     */
    public function __construct($customer_ids, array $year, int $author)
    {
        $this->customer_ids = $customer_ids;
        $this->year_start = $year[0];
        $this->year_end = $year[1];
        $this->author = $author;
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
    public function getCustomerIds(): array
    {
        return $this->customer_ids;
    }

    /**
     * Получить год начала
     *
     * @return int|mixed
     */
    public function getYearStart()
    {
        return $this->year_start;
    }


    /**
     * Прлучить год конца
     *
     * @return int|mixed
     */
    public function getYearEnd()
    {
        return $this->year_end;
    }
}