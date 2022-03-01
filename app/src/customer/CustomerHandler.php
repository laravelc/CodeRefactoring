<?php

namespace App\Customer;

use App\Vendor\Contracts\IFilter;
use App\Vendor\Contracts\IHandler;
use App\Vendor\Contracts\IProvider;
use App\Vendor\Provider;

class CustomerHandler implements IHandler
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
     * @param CustomerFilter $filter
     * @return void
     */
    public function handle(IFilter $filter)
    {
        echo $this->getView($this->getData($filter));
    }

    /**
     * @param array $arr
     * @return string
     */
    public function getView(array $arr): string
    {
        return implode('<br>', $arr);
    }

    /**
     * @param IFilter $filter
     * @return array
     */
    public function getData(IFilter $filter): array
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

        $arr = [];

        foreach ($this->provider->getObjects($query, CustomerModel::class) as $customer) {
            $arr[] = $customer->render();
        }
        return $arr;
    }
}