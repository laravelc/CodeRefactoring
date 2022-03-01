<?php

use Vendor\IProvider;
use Vendor\Provider;

class Handler implements IHandler
{
    /**
     * Провайдер
     */
    private IProvider $provider;

    /**
     * Конструктор
     *
     * @param IProvider|null $provider
     */
    public function __construct(IProvider $provider = null)
    {
        $this->provider = $provider == null ? new Provider() : $provider;
    }

    /**
     * Выполнить
     *
     * @param Filter $filter
     * @return void
     */
    public function handle(IFilter $filter)
    {
        $query = sprintf(
            "SELECT c.*  (SELECT count(*) FROM books_customers bc WHERE bc.customer_id = c.id ) as book_count FROM customers c 
              INNER JOIN books_customers b on b.customer_id = c.id
              INNER JOIN books_authors a on a.book_id = b.book_id AND a.autor_id = %d
              WHERE c.id IN (%s) AND birthday BETWEEN %d AND %d",
            implode(',', $filter->getCustomerIds()),
            $filter->getAuthor(),
            $filter->getYearStart(),
            $filter->getYearEnd()
        );

        echo $this->getView($query);
    }

    /**
     * @param string $query
     * @return string
     */
    public function getView(string $query): string
    {
        $arr = [];

        foreach ($this->provider->getObjects($query, Model::class) as $customer) {
            $arr[] = $customer;
        }

        return implode('', $arr);
    }
}