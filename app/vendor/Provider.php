<?php

namespace Vendor;

class Provider implements IProvider
{
    /**
     * @var string
     */
    private string $hostname;

    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var string
     */
    private string $db_name;

    public function __construct()
    {
        $this->hostname = 'localhost';
        $this->username = 'user';
        $this->password = 'password';
        $this->db_name = 'database';
    }

    /**
     * Получить данные
     *
     * @param string $query
     * @param string $class
     * @return mixed
     */
    public function getObjects(string $query, string $class): array
    {
        $result = [];

        $db = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
        $sql = mysqli_query(
            $db,
            $query
        );
        while ($obj = $sql->fetch_object($class)) {
            $result = $obj;
        }
        mysqli_close($db);

        return $result;
    }
}