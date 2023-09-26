<?php

namespace CI4Extensions\LaravelMigrations\Traits;

use CodeIgniter\Database\Migration;

trait SchemaTrait
{
    public static function create(string $table, callable $schemaCallback)
    {
        call_user_func($schemaCallback, [new \CI4Extensions\LaravelMigrations\Blueprint()]);
    }
    public static function dropIfExists()
    {
    }
}
