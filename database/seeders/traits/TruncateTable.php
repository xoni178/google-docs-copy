<?php


namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{

    protected function truncateTable(string $table): void
    {
        DB::table($table)->truncate();
    }
}
