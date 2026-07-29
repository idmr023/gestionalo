<?php

namespace App\Database;

use Illuminate\Database\Connectors\PostgresConnector as BaseConnector;
use PDO;

class NeonPostgresConnector extends BaseConnector
{
    public function connect(array $config)
    {
        $dsn = $this->getDsn($config);

        if (! empty($config['options']) && is_string($config['options'])) {
            $dsn .= ';options='.$config['options'];
        }

        unset($config['options']);

        $pdo = new PDO($dsn, $config['username'], $config['password'], $this->getOptions($config));

        $search = $config['search_path'] ?? 'public';
        if (is_string($search) && preg_match('/^[a-zA-Z_][a-zA-Z0-9_,\s]*$/', $search)) {
            // Create schema if not exists (safe even if it does)
            try {
                $pdo->exec("CREATE SCHEMA IF NOT EXISTS {$search} AUTHORIZATION {$config['username']}");
            } catch (\Throwable $e) {
                // If we can't create, ignore and continue
            }
            $pdo->exec("SET search_path TO {$search}");
        }

        return $pdo;
    }
}
