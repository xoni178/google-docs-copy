<?php


namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait ForeignKeyChecking
{

    protected function enableForeignKeyChecks(): void
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
    }
    protected function disableForeignKeyChecks(): void
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
    }
}
