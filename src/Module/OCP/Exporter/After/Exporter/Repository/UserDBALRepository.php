<?php

namespace App\Module\SRP\Exporter\After\Exporter\Repository;

use Doctrine\DBAL\Connection;

class UserDBALRepository implements UserRepositoryInterface
{
    public function __construct(
        private Connection $connection
    ) {
    }

    public function getUsers(): array
    {
        return $this->connection->fetchAllAssociative('SELECT * FROM users');
    }
}
